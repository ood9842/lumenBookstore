<?php

namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class ChartsController extends BaseController {

    /**
     * Display a the chart for projects.
     * GET /projects/chart/data
     *
     * @return Response
     */

    public function sellChartData()
    {
      $devlist = DB::table('sell_logs')
          ->select(DB::raw('MONTHNAME(sell_date) as month'), DB::raw("SUM(total_payment) as Sum"))
          ->groupBy('month')
          ->orderby('sell_date')
          ->get();

      return $devlist;
        // vardump($devlist);
    }

}
