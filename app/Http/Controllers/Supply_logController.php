<?php

namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller as BaseController;
use Illuminate\Http\Request;

use App\Models\Supply_logs;
use App\Models\Supply_details;

class Supply_logController extends BaseController
{
    public function index()
    {
      $supply_logs=Supply_logs::all();
      return view('supply_log.index', compact('supply_logs'));
    }

    public function read($id)
    {
       $supply_log=Supply_logs::findOrFail($id);
       return view('supply_log.detail', compact('supply_log'));
    }

    public function form()
    {
      return view('supply_log.create');
    }

    public function edit($id)
    {
      $supply_log=Supply_logs::findOrFail($id);
      return view('supply_log.edit', compact('supply_log'));
    }

//CRUD
    public function create(Request $request)
    {
      $supply_log=new Supply_logs;//create row
      $supply_log->Slogs_id = $request->input('id');
      $supply_log->stock_id = $request->input('SID');
      $supply_log->product_line_id = $request->input('ProID');
      $supply_log->supply_date = $request->input('date');
      $supply_log->total_payment = Supply_details::where('slogs_id','=',$supply_log->Slogs_id)->sum('total_line');
      $supply_log->sentOrback= $request->input('srb');

      $supply_log->save();//store

      return redirect('/supply_logs');
    }

    public function update(Request $request, $id)
    {
      $supply_log=Supply_logs::findOrFail($id);
      $supply_log->stock_id = $request->input('SID');
      $supply_log->product_line_id = $request->input('ProID');
      $supply_log->supply_date = $request->input('date');
      $supply_log->total_payment = Supply_details::where('slogs_id','=',$supply_log->Slogs_id)->sum('total_line');
      $supply_log->sentOrback= $request->input('srb');

      $supply_log->save();//store
      $supply_log->push();

      return redirect('/supply_logs');
    }

    public function update_detail(Request $request, $id)
    {
      $supply_log=Supply_logs::findOrFail($id);
      $supply_log->total_payment = Supply_details::where('slogs_id','=',$supply_log->Slogs_id)->sum('total_line');

      $supply_log->save();//store
      $supply_log->push();

      return redirect('/supply_logs');
    }

    public function delete($id)
    {
      $supply_log=Supply_logs::findOrFail($id);
      $supply_log->delete();
      return redirect('/supply_logs');
    }
  }
