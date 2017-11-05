<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class BookInStocks extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
          Schema::create('book_in_stocks', function(Blueprint $table){
            $table->string('stock_id', 9);
            $table->string('book_id', 17);
            $table->integer('amount')->unsigned();

            $table->foreign('stock_id')->references('Stock_id')->on('stocks');
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
