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
        'Store_id'=>'SE001lc11',//10 is muang
        'address'=>'55/15 Wangnua Lampang',
        'stock_id'=>'SK001lc11'
      ]);

      DB::table('stores')->insert([
        'Store_id'=>'SE002lc20',
        'address'=>'60/114 Muang ChaingMai',
        'stock_id'=>'SK002lc20'
      ]);

      DB::table('stores')->insert([
        'Store_id'=>'SE003lc52',
        'address'=>'20/9   Nuanchan Bangkok',
        'stock_id'=>'SK003lc50'
      ]);
    }
}
