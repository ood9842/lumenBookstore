<?php

namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller as BaseController;
use Illuminate\Http\Request;

use App\Models\Persons;

class PersonController extends BaseController
{
    public function index()
    {
      $persons=Persons::all();
      return view('person.index', compact('persons'));
    }

    public function read($id)
    {
       $person=Persons::findOrFail($id);
       return view('person.detail', compact('person'));
    }

    public function form()
    {
      return view('person.create');
    }

    public function edit($id)
    {
      $person=Persons::findOrFail($id);
      return view('person.edit', compact('person'));
    }

//CRUD
    public function create(Request $request)
    {
      $person=new Persons;//create row
      $person->P_id = $request->input('id');
      $person->first_name = $request->input('FirstName');
      $person->last_name = $request->input('LastName');

      $person->save();//store

      return redirect('/persons');
    }

    public function update(Request $request, $id)
    {
      $person=Persons::findOrFail($id);
      $person->first_name = $request->input('FirstName');
      $person->last_name = $request->input('LastName');

      $person->save();//store
      $person->push();

      return redirect('/persons');
    }

    public function delete($id)
    {
      $person=Persons::findOrFail($id);
      $person->delete();
      return redirect('/persons');
    }
  }
