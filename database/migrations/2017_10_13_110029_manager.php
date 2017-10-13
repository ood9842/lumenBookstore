<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Manager extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('manager', function(Blueprint $table){
        $table->string('staff_id', 9);
        $table->string('store_manageON', 9);

        $table->foreign('store_manageON')->references('Store_id')->on('stores');
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
