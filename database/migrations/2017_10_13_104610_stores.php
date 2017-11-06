<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Stores extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stores', function(Blueprint $table){
          $table->string('Store_id', 9);
          $table->text('address');
          $table->string('stock_id', 9);

          $table->primary('Store_id');
          $table->unique('stock_id');
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
