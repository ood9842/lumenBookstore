<?php

use Illuminate\Database\Seeder;

class Data_Customers extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('customers')->insert([
          'C_id'=>'Cml10I001',//สาขาจังหวัด 10
          'person_id'=>'8067547831465',
          'member_id'=>'SE001lc11',
        ]);
    }
}
