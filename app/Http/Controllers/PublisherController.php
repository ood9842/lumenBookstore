<?php

namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller as BaseController;
use Illuminate\Http\Request;

use App\Models\Publishers;

class PublisherController extends BaseController
{
    public function index()
    {
      $publishers=Publishers::all();
      return view('publisher.index', compact('publishers'));
    }

    public function read($id)
    {
       $publisher=Publishers::findOrFail($id);
       return view('publisher.detail', compact('publisher'));
    }

    public function form()
    {
      return view('publisher.create');
    }

    public function edit($id)
    {
      $publisher=Publishers::findOrFail($id);
      return view('publisher.edit', compact('publisher'));
    }

//CRUD
    public function create(Request $request)
    {
      $publisher=new Publishers;//create row
      $publisher->Publisher_id = $request->input('id');
      $publisher->publisher_name = $request->input('Pubname');
      $publisher->save();//store

      return redirect('/publishers');
    }

    public function update(Request $request, $id)
    {
      $publisher=Publisherss::findOrFail($id);
      $publisher->Publisher_id = $request->input('id');//test case cahe update
      $publisher->publisher_name = $request->input('Pubname');
      $publisher->save();//store
      $publisher->push();

      return redirect('/publishers');
    }

    public function delete($id)
    {
      $publisher=Publishers::findOrFail($id);
      $publisher->delete();
      return redirect('/publishers');
    }
  }
