<?php

namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller as BaseController;
use Illuminate\Http\Request;

use App\Models\Employees;

class EmployeeController extends BaseController
{
    public function index()
    {
      $employees=Employees::all();
      return view('employee.index', compact('employees'));
    }

    public function read($id)
    {
       $employee=Employees::where('staff_id','=',$id)->first();
       return view('employee.detail', compact('employee'));
    }

    public function form()
    {
      return view('employee.create');
    }

    public function edit($id)
    {
      $employee=Employees::where('staff_id','=',$id)->first();
      return view('employee.edit', compact('employee'));
    }

//CRUD
    public function create(Request $request)
    {
      $employee=new Employees;//create row
      $employee->staff_id = $request->input('staff_id')->first();
      $employee->store_workON = $request->input('store_workON');


      $employee->save();//store

      return redirect('/employees');
    }

    public function update(Request $request, $id)
    {
      $employee=Employees::where('staff_id','=',$id)->first();
      $employee->first()->store_workON = $request->input('store_workON');


      $employee->first()->save();//store
      $employee->first()->push();//store

      return redirect('/employees');
    }

    public function delete($id)
    {
      $employee=Employees::where('staff_id','=',$id);
      $employee->delete();
      return redirect('/employees');
    }
  }