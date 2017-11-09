<?php

namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller as BaseController;
use Illuminate\Http\Request;

use App\Models\Stock_keepers;
use App\Models\Stocks;
use App\Models\Staffs;

class Stock_keeperController extends BaseController
{
    public function index()
    {
      $stock_keepers=Stock_keepers::all();
      return view('stock_keeper.index', compact('stock_keepers'));
    }

    public function read($id)
    {
       $stock_keeper=Stock_keepers::where('staff_id','=',$id)->first();
       return view('stock_keeper.detail', compact('stock_keeper'));
    }

    public function form()
    {
      return view('stock_keeper.create');
    }

    public function edit($id)
    {
      $stock_keeper=Stock_keepers::where('staff_id','=',$id)->first();
      return view('stock_keeper.edit', compact('stock_keeper'));
    }

//CRUD
    public function create(Request $request)
    {
      $stock_keeper=new Stock_keepers;//create row
      $stock=Stocks::find($request->input('stock_on'));
      $staff=Staffs::find($request->input('id'));
      if($staff==Null)
      {
          echo "miss staff";
          var_dump($staff);
      }
      if($stock==Null)
      {
          echo "miss store";
          var_dump($store);
      }
      $stock_keeper->staff_id = $request->input('id');
      $stock_keeper->stock_workON = $request->input('stock_on');

      $stock_keeper->save();//store

      return redirect('/stock_keepers');
    }

    public function update(Request $request, $id,$id2)
    {
      $work_on = $request->input('stock_workON');
      $stock_keeper=Stock_keepers::where('staff_id','=',$id)->where('stock_workON','=',$id2)->update(array('stock_workON'=>$work_on));

      return redirect('/stock_keepers');
    }

    public function delete($id)
    {
      $stock_keeper=Stock_keepers::where('staff_id','=',$id);
      $stock_keeper->delete();
      return redirect('/stock_keepers');
    }
  }
