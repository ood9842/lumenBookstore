<?php

namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller as BaseController;
use Illuminate\Http\Request;

use App\Models\Books;

class PersonController extends BaseController
{
    public function index()
    {
      $books=Books::all();
      return view('book.index', compact('books'));
    }

    public function read($id)
    {
       $book=Books::findOrFail($id);
       return view('book.detail', compact('book'));
    }

    public function form()
    {
      return view('book.create');
    }

    public function edit($id)
    {
      $book=Books::findOrFail($id);
      return view('book.edit', compact('book'));
    }

//CRUD
    public function create(Request $request)
    {
      $book=new Books;//create row
      $book->Book_id = $request->input('id');
      $book->Book_name = $request->input('Bname');
      $book->type = $request->input('type');
      $book->edition = $request->input('edition');
      $book->publisher_name = $request->input('Pname');

      $book->published_year= $request->input('Pyear');

      $book->price = $request->input('price');
      $book->save();//store

      return redirect('/books');
    }

    public function update(Request $request, $id)
    {
      $book=Books::findOrFail($id);
      $book->Book_name = $request->input('Bname');
      $book->type = $request->input('type');
      $book->edition = $request->input('edition');
      $book->publisher_name = $request->input('Pname');

      $book->published_year= $request->input('Pyear');

      $book->price = $request->input('price');
      $book->save();//store
      $book->push();

      return redirect('/books');
    }

    public function delete($id)
    {
      $book=Books::findOrFail($id);
      $book->delete();
      return redirect('/books');
    }
  }
