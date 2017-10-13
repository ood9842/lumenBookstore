<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class SupplyDetails extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('supply_details', function(Blueprint $table){
        $table->string('slogs_id', 10);
        $table->string('book_id', 6);
        $table->string('book_name');
        $table->float('price')->unsigned();
        $table->integer('amount')->unsigned();
        $table->float('total_line');//เงินติดลบแสดงว่าซื้อ บวกแสดงว่าส่งคืน

        $table->foreign('slogs_id')->references('Slogs_id')->on('supply_logs');
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
