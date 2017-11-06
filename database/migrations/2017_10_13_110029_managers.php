<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Managers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('managers', function(Blueprint $table){
        $table->string('staff_id', 9);
        $table->string('store_manageON', 9);

        $table->foreign('store_manageON')->references('Store_id')->on('stores')->onDelete('cascade');;
        $table->foreign('staff_id')->references('S_id')->on('staffs')->onDelete('cascade');;
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
