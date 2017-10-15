<?php

use Illuminate\Database\Seeder;

class Data_Stores extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('stores')->insert([
        'Store_id'=>'SE001lc10',
        'address'=>'55/15 Wangnua Lampang',
        'stock_id'=>'SK001lc10'
      ]);

      DB::table('stores')->insert([
        'Store_id'=>'SE002lc11',
        'address'=>'60/114 Wangnua Lampang',
        'stock_id'=>'SK002lc11'
      ]);

      DB::table('stores')->insert([
        'Store_id'=>'SE003lc50',
        'address'=>'20/9   Nuanchan Bangkok',
        'Stock_id'=>'SK003lc50'
      ]);
    }
}
