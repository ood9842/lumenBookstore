<?php

namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller as BaseController;
use Illuminate\Http\Request;

use App\Models\Managers;
use App\Models\Stores;
use App\Models\Staffs;

class ManagerController extends BaseController
{
    public function index()
    {
      $managers=Managers::all();
      return view('manager.index', compact('managers'));
    }

    public function read($id)
    {
       $manager=Managers::where('staff_id','=',$id)->first();
       return view('manager.detail', compact('manager'));
    }

    public function form()
    {
      return view('manager.create');
    }

    public function edit($id)
    {
      $manager=Managers::where('staff_id','=',$id)->first();
      return view('manager.edit', compact('manager'));
    }

//CRUD
    public function create(Request $request)
    {
      $manager=new Managers;//create row
      $store=Stores::find($request->input('store_on'));
      $staff=Staffs::find($request->input('manager_id'));
      if($staff==Null)
      {
          echo "miss staff";
          var_dump($staff);
      }
      if($store==Null)
      {
          echo "miss store";
          var_dump($store);
      }
      $manager->staff_id = $request->input('manager_id');
      $manager->store_manageON = $request->input('store_on');

      $manager->save();//store

      return redirect('/managers');
    }

    public function update(Request $request, $id,$id2)
    {
      $work_on = $request->input('store_manageON');
      $employee=Managers::where('staff_id','=',$id)->where('store_manageON','=',$id2)->update(array('store_manageON'=>$work_on));

      return redirect('/managers');
    }

    public function delete($id)
    {
      $manager=Managers::where('staff_id','=',$id);
      $manager->delete();
      return redirect('/managers');
    }
  }
