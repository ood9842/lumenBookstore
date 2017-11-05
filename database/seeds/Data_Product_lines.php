<?php

use Illuminate\Database\Seeder;

class Data_product_lines extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('product_lines')->insert([
            'product_line_id'=>'0123456789',
            'publisher_id'=>'1234567'
        ]);
        DB::table('product_lines')->insert([
            'product_line_id'=>'9876543210',
            'publisher_id'=>'7654321'
        ]);
    }
}
