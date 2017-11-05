<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class StockKeepers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('stock_keepers', function(Blueprint $table){
        $table->string('staff_id', 9);
        $table->string('stock_workON', 9);

        $table->foreign('stock_workON')->references('Stock_id')->on('stocks');
        $table->unique('staff_id');
        $table->foreign('staff_id')->references('S_id')->on('staffs');
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
