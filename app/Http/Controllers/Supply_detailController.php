<?php

namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller as BaseController;
use Illuminate\Http\Request;

use App\Models\Supply_details;
use App\Models\Books;

class Supply_detailController extends BaseController
{
    public function index()
    {
      $supply_details=Supply_details::all();
      return view('supply_detail.index', compact('supply_details'));
    }

    public function read($id,$id2)
    {
      $supply_detail=Supply_details::where('slogs_id','=',$id)->where('book_id','=',$id2)->first();
       return view('supply_detail.detail', compact('supply_detail'));
    }

    public function form()
    {
      return view('supply_detail.create');
    }

    public function edit($id,$id2)
    {
      $supply_detail=Supply_details::where('slogs_id','=',$id)->where('book_id','=',$id2)->first();
      return view('supply_detail.edit', compact('supply_detail'));
    }

//CRUD
    public function create(Request $request)
    {
      $slogs_id = $request->input('slogs_id');
      $book_id = $request->input('book_id');
      $amount = $request->input('amount');
      $book_name = Books::where('Book_id','=',$book_id)->first()->Book_name;
      $price = Books::where('book_id','=',$book_id)->first()->price;
      $total_line = $price * $amount;
      $supply_detail=Supply_details::insert(array('slogs_id' => $slogs_id, 'book_id' => $book_id, 'book_name' => $book_name, 'price' => $price, 'amount' => $amount, 'total_line' => $total_line));

      return redirect('/supply_details');
    }

    public function update(Request $request, $id,$id2)
    {
      $book_id = $request->input('book_id');
      $amount = $request->input('amount');
      $book_name = Books::where('Book_id','=',$book_id)->first()->Book_name;
      $price = Books::where('book_id','=',$book_id)->first()->price;
      $total_line = $price * $amount;
      $supply_detail=Supply_details::where('slogs_id','=',$id)->where('book_id','=',$id2)->update(array( 'book_id' => $book_id, 'book_name' => $book_name, 'price' => $price, 'amount' => $amount, 'total_line' => $total_line));

      return redirect('/supply_details');
    }

    public function delete($id,$id2)
    {
      $supply_detail=Supply_details::where('slogs_id','=',$id)->where('book_id','=',$id2)->delete();

      return redirect('/supply_details');
    }
  }
