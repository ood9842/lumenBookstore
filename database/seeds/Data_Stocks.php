<?php

use Illuminate\Database\Seeder;

class Data_Stocks extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('stocks')->insert([
          'Stock_id'=>'SK001lc10',
          'number_of_books'=>'30000',
          'location'=>'12/15 Wangnua Lampang'
        ]);

        DB::table('stocks')->insert([
          'Stock_id'=>'SK002lc11',
          'number_of_books'=>'40000',
          'location'=>'14  Muang ChaingMai'
        ]);

        DB::table('stocks')->insert([
          'Stock_id'=>'SK003lc50',
          'number_of_books'=>'5020',
          'location'=>'15/6  Muang Bangkok'
        ]);
    }
}
