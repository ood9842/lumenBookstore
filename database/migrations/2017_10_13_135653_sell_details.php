<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class SellDetails extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('sell_details', function(Blueprint $table){
        $table->string('sell_logs_id', 10);
        $table->string('book_id', 17);
        $table->string('book_name');
        $table->float('price')->unsigned();
        $table->integer('amount')->unsigned();
        $table->float('total_line')->unsigned();

        $table->foreign('sell_logs_id')->references('Sell_logs_id')->on('sell_logs');
        $table->foreign('book_id')->references('Book_id')->on('books');
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
