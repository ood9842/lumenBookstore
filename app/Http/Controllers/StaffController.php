<?php

namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller as BaseController;
use Illuminate\Http\Request;

use App\Models\Staffs;
use App\Models\Persons;

class StaffController extends BaseController
{
    public function index()
    {
      $staffs=Staffs::all();
      return view('staff.index', compact('staffs'));
    }

    public function read($id)
    {
       $staff=Staffs::findOrFail($id);
       return view('staff.detail', compact('staff'));
    }

    public function form()
    {
      return view('staff.create');
    }

    public function edit($id)
    {
      $staff=Staffs::findOrFail($id);
      return view('staff.edit', compact('staff'));
    }

//CRUD
    public function create(Request $request)
    {
      $persons=Persons::find($request->input('PID'));
      if($persons==Null) {
        $person=new Persons;//create row
        $person->P_id = $request->input('PID');
        $person->first_name = $request->input('FirstName');
        $person->last_name = $request->input('LastName');
        $person->save();//store
      }

      $staff=new Staffs;//create row
      $staff->person_id = $request->input('PID');
      $staff->S_id = $request->input('id');
      $staff->salary = $request->input('salary');
      $staff->work_on = $request->input('Wdate');
      $staff->save();//store*/
      return redirect('/staffs');
    }

    public function update(Request $request, $id)
    {
      $staff=Staffs::findOrFail($id);
      $staff->P_id = $request->input('PID');
      $staff->salary = $request->input('salary');
      $staff->work_on = $request->input('Wdate');

      $staff->save();//store
      $staff->push();

      return redirect('/staffs');
    }

    public function delete($id)
    {
      $staff=Staffs::findOrFail($id);
      $staff->delete();
      return redirect('/staffs');
    }
  }
