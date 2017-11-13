<?php

namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller as BaseController;
use Illuminate\Http\Request;

use App\Models\Book_in_stock;

class Book_in_stockController extends BaseController
{
    public function index()
    {
      $book_in_stocks=Book_in_stock::all();
      return view('book_in_stock.index', compact('book_in_stocks'));
    }

    public function read($id,$id2)
    {
      $book_in_stock=Book_in_stock::where('stock_id','=',$id)->where('book_id','=',$id2)->first();
       return view('book_in_stock.detail', compact('book_in_stock'));
    }

    public function form()
    {
      return view('book_in_stock.create');
    }

    public function edit($id,$id2)
    {
      $book_in_stock=Book_in_stock::where('stock_id','=',$id)->where('book_id','=',$id2)->first();
      return view('book_in_stock.edit', compact('book_in_stock'));
    }

//CRUD
    public function create(Request $request)
    {
      $stock_id = $request->input('stock_id');
      $book_id = $request->input('book_id');
      $amount = $request->input('amount');
      $book_in_stock=Book_in_stock::insert(array('stock_id' => $stock_id, 'book_id' => $book_id, 'amount' => $amount));

      return redirect('/book_in_stocks');
    }

    public function update(Request $request, $id,$id2)
    {
      $amount = $request->input('amount');
      $book_in_stock=Book_in_stock::where('stock_id','=',$id)->where('book_id','=',$id2)->update(array('amount'=>$amount));

      return redirect('/book_in_stocks');
    }

    public function delete($id,$id2)
    {
      $book_in_stock=Book_in_stock::where('stock_id','=',$id)->where('book_id','=',$id2)->delete();

      return redirect('/book_in_stocks');
    }
  }
