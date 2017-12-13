<?php

namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;

class Controller extends BaseController
{
  public function index()
  {
      return view('home');
  }

  public function errors()
  {
      return view('errors.page');
  }

  public function overview()
  {
    $devlist = DB::table('sell_details')
        ->join('sell_logs', 'sell_logs.Sell_logs_id', '=', 'sell_details.sell_logs_id')
        ->select(DB::raw('book_name as name'), DB::raw("SUM(amount) as amount"))
        ->groupBy('name')
        ->orderby('amount', 'desc')
        ->limit(5)
        ->get();

    $orderlist = DB::table('supply_details')
        ->join('supply_logs', 'supply_logs.slogs_id', '=', 'supply_details.slogs_id')
        ->select(DB::raw('supply_date as date'), DB::raw("SUM(total_payment) as total"), DB::raw('book_id as bookid'),DB::raw('book_name as bookname'))
        ->groupBy('date')
        ->get();
    
    return view('home', compact('devlist'), compact('orderlist'));
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return Response
   */
  public function create()
  {
      //
  }

  /**
   * Store a newly created resource in storage.
   *
   * @return Response
   */
  public function store()
  {
      //
  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function show($id)
  {
      //
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function edit($id)
  {
      //
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function update($id)
  {
      //
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function destroy($id)
  {
      //
  }
}
