<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Books extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function(Blueprint $table){
          $table->string('Book_id', 17);
          $table->string('Book_name');
          $table->string('type'); //ตัวเลือกที่คิดไว้ทำในส่วน logical ในเว็ปเอง
          $table->integer('edition');
          $table->string('publisher_name');
          $table->integer('published_year');
          $table->float('price');

          $table->primary('Book_id');
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
