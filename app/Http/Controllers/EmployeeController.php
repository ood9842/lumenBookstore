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
      $employee->first()->staff_id = $request->input('staff_id');
      $employee->first()->store_workON = $request->input('store_workON');


      $employee->save();//store

      return redirect('/employees');
    }

    public function update(Request $request, $id)
    {
      $input = $request->only('store_workON');
      $employee=Employees::where('staff_id','=',$id)->first();
      $employee->first()->store_workON = $request->input('store_workON');

      $employee->save();//store
      $employee->push();//store

      // var_dump($employee);
      var_dump($input);
      return redirect('/employees');
    }

    public function delete($id)
    {
      $employee=Employees::where('staff_id','=',$id);
      $employee->delete();
      return redirect('/employees');
    }
  }
