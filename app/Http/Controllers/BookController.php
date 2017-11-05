<?php

namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller as BaseController;
use App\Books;

class BookController extends BaseController
{
    public function index()
    {
      $books=Books::all();
      return view('book.index', compact('books'));
    }

    public function detail($id)
    {
      $book=Books::findOrFail($id);
      return view('book.detail', compact('book'));
    }

    public function create()//not done
    {
      return view('book.create');
    }

    public function delete($id)
    {
      $book=Books::findOrFail($id);
      $book->delete();
      $books=Books::all();
      return view('book.index', compact('books'));
    }
}
