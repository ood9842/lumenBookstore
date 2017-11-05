<?php

namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller as BaseController;
use App\book_in_stock;

class Book_in_stockController extends BaseController
{
    public function index()
    {
      $book_in_stocks=Book_in_stock::all();
      return view('book_in_stock', compact('book_in_stocks'));
    }

}
