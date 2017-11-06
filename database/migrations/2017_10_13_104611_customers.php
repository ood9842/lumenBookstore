<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Customers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function(Blueprint $table) {
          $table->string('C_id', 9);
          $table->string('person_id', 13);
          $table->string('member_id', 9); //สมาชิกอยู่สาขาไหน
          $table->integer('points');
          $table->date('expired_date');

          $table->primary('C_id');
          $table->unique('person_id');
          $table->foreign('person_id')->references('P_id')->on('persons')->onDelete('cascade');;
          $table->foreign('member_id')->references('Store_id')->on('stores')->onDelete('cascade');;
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //Schema::drop('customers');
    }
}
