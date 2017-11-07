<?php

namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller as BaseController;
use Illuminate\Http\Request;

use App\Models\Customers;

class CustomerController extends BaseController
{
    public function index()
    {
      $customers=Customers::all();
      return view('customer.index', compact('customers'));
    }

    public function read($id)
    {
       $customer=Customers::findOrFail($id);
       return view('customer.detail', compact('customer'));
    }

    public function form()
    {
      return view('customer.create');
    }

    public function edit($id)
    {
      $customer=Customers::findOrFail($id);
      return view('customer.edit', compact('customer'));
    }

//CRUD
    public function create(Request $request)
    {
      $customer=new Customers;//create row
      $customer->C_id = $request->input('C_id');
      $customer->person_id = $request->input('person_id');
      $customer->member_id = $request->input('member_id');
      $customer->points = $request->input('points');
      $customer->expired_date = $request->input('expired_date');

      $customer->save();//store

      return redirect('/customers');
    }

    public function update(Request $request, $id)
    {
      $customer=Customers::findOrFail($id);
      $customer->person_id = $request->input('person_id');
      $customer->member_id = $request->input('member_id');
      $customer->points = $request->input('points');
      $customer->expired_date = $request->input('expired_date');

      $customer->save();//store
      $customer->push();//store

      return redirect('/customers');
    }

    public function delete($id)
    {
      $customer=Customers::findOrFail($id);
      $customer->delete();
      return redirect('/customers');
    }
  }
