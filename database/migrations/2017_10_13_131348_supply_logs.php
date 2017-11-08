<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class SupplyLogs extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('supply_logs', function(Blueprint $table){
        $table->string('Slogs_id', 10);
        $table->string('stock_id', 9);
        $table->string('product_line_id', 10);
        $table->date('supply_date');
        $table->float('total_payment');
        $table->string('sentOrback');

        $table->primary('Slogs_id');
        $table->foreign('product_line_id')->references('Product_line_id')->on('product_lines')->onDelete('cascade');;
        $table->foreign('stock_id')->references('Stock_id')->on('stocks')->onDelete('cascade');;
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
