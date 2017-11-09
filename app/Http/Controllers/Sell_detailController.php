<?php

namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller as BaseController;
use Illuminate\Http\Request;

use App\Models\Sell_details;
use App\Models\Books;

class Sell_detailController extends BaseController
{
    public function index()
    {
      $sell_details=Sell_details::all();
      return view('sell_detail.index', compact('sell_details'));
    }

    public function read($id,$id2)
    {
      $sell_detail=Sell_details::where('sell_logs_id','=',$id)->where('book_id','=',$id2)->first();
       return view('sell_detail.detail', compact('sell_detail'));
    }

    public function form()
    {
      return view('sell_detail.create');
    }

    public function edit($id,$id2)
    {
      $sell_detail=Sell_details::where('sell_logs_id','=',$id)->where('book_id','=',$id2)->first();
      return view('sell_detail.edit', compact('sell_detail'));
    }

//CRUD
    public function create(Request $request)
    {
      $sell_logs_id = $request->input('sell_logs_id');
      $book_id = $request->input('book_id');
      $amount = $request->input('amount');
      $book_name = Books::where('Book_id','=',$book_id)->first()->Book_name;
      $price = Books::where('book_id','=',$book_id)->first()->price;
      $total_line = $price * $amount;
      $sell_detail=Sell_details::insert(array('sell_logs_id' => $sell_logs_id, 'book_id' => $book_id, 'book_name' => $book_name, 'price' => $price, 'amount' => $amount, 'total_line' => $total_line));

      return redirect('/sell_details');
    }

    public function update(Request $request, $id,$id2)
    {
      $book_id = $request->input('book_id');
      $amount = $request->input('amount');
      $book_name = Books::where('Book_id','=',$book_id)->first()->Book_name;
      $price = Books::where('book_id','=',$book_id)->first()->price;
      $total_line = $price * $amount;
      $sell_detail=Sell_details::where('sell_logs_id','=',$id)->where('book_id','=',$id2)->update(array( 'book_id' => $book_id, 'book_name' => $book_name, 'price' => $price, 'amount' => $amount, 'total_line' => $total_line));

      return redirect('/sell_details');
    }


    public function delete($id,$id2)
    {
      $sell_detail=Sell_details::where('sell_logs_id','=',$id)->where('book_id','=',$id2)->delete();

      return redirect('/sell_details');
    }
  }
