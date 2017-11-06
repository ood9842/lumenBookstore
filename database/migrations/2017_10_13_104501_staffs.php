<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Staffs extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('staffs', function(Blueprint $table){
          $table->string('person_id', 13);
          $table->string('S_id', 9);
          $table->integer('salary');
          $table->date('work_on');

          $table->primary('S_id');
          $table->unique('person_id');
          $table->foreign('person_id')->references('P_id')->on('persons')->onDelete('cascade');;
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
