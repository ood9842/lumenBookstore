<?php

use Illuminate\Database\Seeder;

class Data_Book_in_stock extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('book_in_stock')->insert([
            'stock_id'=>'',
            'book_id'=>'',
            'amount'=>'',
        ]);
    }
}
