<?php

namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller as BaseController;
use Illuminate\Http\Request;

use App\Books;

class BookController extends BaseController
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


//CRUD
    public function create(Request $request)//not done
    {
      $book=new Books;//create row
      $book->Book_id = $request->input('id');
      $book->Book_name = $request->input('Bname');
      $book->type = $request->input('type');
      $book->edition = $request->input('edition');
      $book->publisher_name = $request->input('Pname');
      $book->published_year->input('Pyear');
      $book->price = $request->input('price');
      $book->save();//store

      return redirect('/books');
    }
  }
/*
    public function update($id)
    {
        $rules = array(
            'name'       => 'required',
            'email'      => 'required|email',
            'nerd_level' => 'required|numeric'
        );
        $validator = Validator::make(Input::all(), $rules);

            // store
            $nerd = Nerd::find($id);
            $nerd->name       = Input::get('name');
            $nerd->email      = Input::get('email');
            $nerd->nerd_level = Input::get('nerd_level');
            $nerd->save();

            Session::flash('message', 'Successfully updated nerd!');
            return Redirect::to('nerds');
    }

    public function delete($id)
    {
      $book=Books::findOrFail($id);
      $book->delete();
      return redirect('/books');
    }
}
*/
