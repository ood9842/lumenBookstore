<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class SellLogs extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('sell_logs', function(Blueprint $table){
        $table->string('Sell_logs_id', 10);
        $table->string('stock_id', 9);
        $table->string('customer_id', 9);
        $table->date('sell_date');
        $table->float('total_payment');

        $table->primary('Sell_logs_id');
        $table->foreign('customer_id')->references('C_id')->on('customers');//ซื้อของต่างสาขาได้ส่วนลด
        $table->foreign('stock_id')->references('Stock_id')->on('stocks');
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
