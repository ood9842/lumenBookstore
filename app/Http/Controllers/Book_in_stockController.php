<?php

namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller as BaseController;
use App\Models\book_in_stock;

class Book_in_stockController extends BaseController
{
    public function index()
    {
      $book_in_stocks=Book_in_stock::all();
      return view('book_in_stock.index', compact('book_in_stocks'));
    }

    public function edit($id,$id2)
    {
      $book_in_stocks=Book_in_stock::where(['stock_id','=',$id],['book_id','=',$id2]);
      return view('book_in_stock.edit', compact('book_in_stocks'));
    }

    public function update(Request $request, $id , $id2)
    {
      $book_in_stocks=Book_in_stock::where(['stock_id','=',$id],['book_id','=',$id2]);
      $book->stock_id = $request->input('stock_id');
      $book->book_id = $request->input('book_id');
      $book->amount = $request->input('amount');
      $book->save();//store
      $book->push();

      return redirect('/book_in_stock');
    }

    public function delete($id , $id2)
    {
      $book_in_stocks=Book_in_stock::where(['stock_id','=',$id],['book_id','=',$id2]);
      $book_in_stocks->delete();
      return redirect('/book_in_stock');
    }

}
