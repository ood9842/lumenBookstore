<?php

use Illuminate\Database\Seeder;

class Data_publishers extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('publishers')->insert([
            'publisher_id'=>'1234567',
            'publisher_name'=>'publisher1'
        ]);
        DB::table('publishers')->insert([
            'publisher_id'=>'7654321',
            'publisher_name'=>'publisher2'
        ]);
    }
}
