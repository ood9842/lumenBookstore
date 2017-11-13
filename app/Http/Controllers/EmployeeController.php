<?php

namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller as BaseController;
use Illuminate\Http\Request;

use App\Models\Employees;
use App\Models\Stores;
use App\Models\Staffs;

class EmployeeController extends BaseController
{
    public function index()
    {
      $employees=Employees::all();
      return view('employee.index', compact('employees'));
    }

    public function read($id,$id2)
    {
      $employee=Employees::where('staff_id','=',$id)->where('store_workON','=',$id2)->first();
       return view('employee.detail', compact('employee'));
    }

    public function form()
    {
      return view('employee.create');
    }

    public function edit($id,$id2)
    {
      $employee=Employees::where('staff_id','=',$id)->where('store_workON','=',$id2)->first();
      return view('employee.edit', compact('employee'));
    }

//CRUD
    public function create(Request $request)
    {
      $staff_id = $request->input('staff_id');
      $work_on = $request->input('store_workON');
      $employee=Employees::insert(array('staff_id' => $staff_id, 'store_workON' => $work_on));
      // $employee=new Employees;//create row
      // $employee->staff_id = $request->input('staff_id');
      // $employee->store_workON = $request->input('store_workON');
      //
      //
      // $employee->save();//store
      // var_dump($staff_id);
      // var_dump($work_on);
      return redirect('/employees');
    }

    public function update(Request $request, $id,$id2)
    {
      $work_on = $request->input('store_workON');
      $employee=Employees::where('staff_id','=',$id)->where('store_workON','=',$id2)->update(array('store_workON'=>$work_on));

      // // $employee->store_workON = $request->input('store_workON');
      //
      // $employee::where('staff_id','=',$id)->update(array('store_workON'=>$work_on));//store
    //  $employee->push();//store

      // var_dump($employee);
    //var_dump($employee->store_workON);
      var_dump($work_on);
      return redirect('/employees');
    }

    public function delete($id,$id2)
    {
      $employee=Employees::where('staff_id','=',$id)->where('store_workON','=',$id2)->delete();
      // $employee->delete();
      return redirect('/employees');
    }
  }
