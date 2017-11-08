<?php

namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller as BaseController;
use Illuminate\Http\Request;

use App\Models\Sell_logs;
use App\Models\Sell_details;

class Sell_logController extends BaseController
{
    public function index()
    {
      $sell_logs=Sell_logs::all();
      return view('sell_log.index', compact('sell_logs'));
    }

    public function read($id)
    {
       $sell_log=Sell_logs::findOrFail($id);
       return view('sell_log.detail', compact('sell_log'));
    }

    public function form()
    {
      return view('sell_log.create');
    }

    public function edit($id)
    {
      $sell_log=Sell_logs::findOrFail($id);
      return view('sell_log.edit', compact('sell_log'));
    }

//CRUD
    public function create(Request $request)
    {
      $sell_log=new Sell_logs;//create row
      $sell_log->Sell_logs_id = $request->input('id');
      $sell_log->stock_id = $request->input('SID');
      $sell_log->customer_id = $request->input('CusID');
      $sell_log->sell_date = $request->input('date');
      $sell_log->total_payment = Sell_details::where('sell_logs_id','=',$sell_log->Sell_logs_id)->sum('total_line');

      $sell_log->save();//store

      return redirect('/sell_logs');
    }

    public function update(Request $request, $id)
    {
      $sell_log=Sell_logs::findOrFail($id);
      $sell_log->stock_id = $request->input('SID');
      $sell_log->customer_id = $request->input('CusID');
      $sell_log->sell_date = $request->input('date');
      $sell_log->total_payment = Sell_details::where('sell_logs_id','=',$sell_log->Sell_logs_id)->sum('total_line');


      $sell_log->save();//store
      $sell_log->push();

      return redirect('/sell_logs');
    }

    public function delete($id)
    {
      $sell_log=Sell_logs::findOrFail($id);
      $sell_log->delete();
      return redirect('/sell_logs');
    }
  }
