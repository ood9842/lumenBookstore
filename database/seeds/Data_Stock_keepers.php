<?php

use Illuminate\Database\Seeder;

class Data_Stock_keepers extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('stock_keepers')->insert([
        'staff_id'=>'STb01s001',
        'store_workON'=>'SK003lc50'
      ]);

      DB::table('stock_keepers')->insert([
        'staff_id'=>'STb02s002',
        'store_workON'=>'SK002lc20'
      ]);

      DB::table('stock_keepers')->insert([
        'staff_id'=>'STb03s003',
        'store_workON'=>'SK001lc11'
      ]);
    }
}
