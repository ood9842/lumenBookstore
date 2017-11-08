<?php

namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller as BaseController;
use Illuminate\Http\Request;

use App\Models\Product_lines;

class Product_lineController extends BaseController
{
    public function index()
    {
      $product_lines=Product_lines::all();
      return view('product_line.index', compact('product_lines'));
    }

    public function read($id)
    {
       $product_line=Product_lines::findOrFail($id);
       return view('product_line.detail', compact('product_line'));
    }

    public function form()
    {
      return view('product_line.create');
    }

    public function edit($id)
    {
      $product_line=Product_lines::findOrFail($id);
      return view('product_line.edit', compact('product_line'));
    }

//CRUD
    public function create(Request $request)
    {
      $product_line=new Product_lines;//create row
      $product_line->Product_line_id = $request->input('Product_line_id');
      $product_line->publisher_id = $request->input('publisher_id');

      $product_line->save();//store

      return redirect('/product_lines');
    }

    public function update(Request $request, $id)
    {
      $product_line=Product_lines::findOrFail($id);
      $product_line->publisher_id = $request->input('publisher_id');

      $product_line->save();//store
      $product_line->push();

      return redirect('/product_lines');
    }

    public function delete($id)
    {
      $product_line=Product_lines::findOrFail($id);
      $product_line->delete();
      return redirect('/product_lines');
    }
  }
