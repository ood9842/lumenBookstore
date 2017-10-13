<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Employees extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function(Blueprint $table){
          $table->string('staff_id', 9);
          $table->string('store_workON', 9);

          $table->foreign('store_workON')->references('Store_id')->on('stores');
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
