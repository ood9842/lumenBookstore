<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ProductLines extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('product_lines', function(Blueprint $table){
        $table->string('Product_line_id', 10);
        $table->string('publisher_id', 7);

        $table->primary('Product_line_id');
        $table->foreign('publisher_id')->references('Publisher_id')->on('publishers')->onDelete('cascade');;
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
