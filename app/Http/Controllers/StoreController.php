<?php

namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller as BaseController;
use Illuminate\Http\Request;

use App\Models\Stores;

class StoreController extends BaseController
{
    public function index()
    {
      $stores=Stores::all();
      return view('store.index', compact('stores'));
    }

    public function read($id)
    {
       $store=Stores::findOrFail($id);
       return view('store.detail', compact('store'));
    }

    public function form()
    {
      return view('store.create');
    }

    public function edit($id)
    {
      $store=Stores::findOrFail($id);
      return view('store.edit', compact('store'));
    }

//CRUD
    public function create(Request $request)
    {
      $store=new Stores;//create row
      $store->Store_id = $request->input('Store_id');
      $store->address = $request->input('address');
      $store->stock_id = $request->input('stock_id');

      $store->save();//store

      return redirect('/stores');
    }

    public function update(Request $request, $id)
    {
      $store=Stores::findOrFail($id);
      $store->address = $request->input('address');
      $store->stock_id = $request->input('stock_id');

      $store->save();//store
      $store->push();

      return redirect('/stores');
    }

    public function delete($id)
    {
      $store=Stores::findOrFail($id);
      $store->delete();
      return redirect('/stores');
    }
  }
