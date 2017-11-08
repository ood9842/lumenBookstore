<?php

namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller as BaseController;
use Illuminate\Http\Request;

use App\Models\Stocks;

class StockController extends BaseController
{
    public function index()
    {
      $stocks=Stocks::all();
      return view('stock.index', compact('stocks'));
    }

    public function read($id)
    {
       $stock=Stocks::findOrFail($id);
       return view('stock.detail', compact('stock'));
    }

    public function form()
    {
      return view('stock.create');
    }

    public function edit($id)
    {
      $stock=Stocks::findOrFail($id);
      return view('stock.edit', compact('stock'));
    }

//CRUD
    public function create(Request $request)
    {
      $stock=new Stocks;//create row
      $stock->Stock_id = $request->input('Stock_id');
      $stock->number_of_books = $request->input('number_of_books');
      $stock->location = $request->input('location');

      $stock->save();//store

      return redirect('/stocks');
    }

    public function update(Request $request, $id)
    {
      $stock=Stocks::findOrFail($id);
      $stock->number_of_books = $request->input('number_of_books');
      $stock->location = $request->input('location');

      $stock->save();//store
      $stock->push();

      return redirect('/stocks');
    }

    public function delete($id)
    {
      $stock=Stocks::findOrFail($id);
      $stock->delete();
      return redirect('/stocks');
    }
  }
