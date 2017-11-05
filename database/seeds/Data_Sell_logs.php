<?php

use Illuminate\Database\Seeder;

class Data_Sell_logs extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('sell_logs')->insert([
          'Sell_logs_id'=>'SL11c2001',
          'stock_id'=>'SK001lc11',
          'customer_id'=>'CY12E3i01',
          'sell_date'=>'2017-05-20',
          'total_payment'=>'924.00'
        ]);

        DB::table('sell_logs')->insert([
          'Sell_logs_id'=>'SL21c3560',
          'stock_id'=>'SK002lc20',
          'customer_id'=>'CY13E3i01',
          'sell_date'=>'2017-06-13',
          'total_payment'=>'430.00'
        ]);

        DB::table('sell_logs')->insert([
          'Sell_logs_id'=>'SL31c1223',
          'stock_id'=>'SK003lc50',
          'customer_id'=>'CY12E3i02',
          'sell_date'=>'2017-10-11',
          'total_payment'=>'2023.00'
        ]);

        DB::table('sell_logs')->insert([
          'Sell_logs_id'=>'SL11c2532',
          'stock_id'=>'SK001lc11',
          'customer_id'=>'CY15E3i02',
          'sell_date'=>'2017-10-24',
          'total_payment'=>'199.00'
        ]);
        DB::table('sell_logs')->insert([
          'Sell_logs_id'=>'SL11c3502',
          'stock_id'=>'SK001lc11',
          'customer_id'=>'CY15E3i02',
          'sell_date'=>'2017-11-03',
          'total_payment'=>'829.00'
        ]);

        DB::table('sell_logs')->insert([
          'Sell_logs_id'=>'SL31c2650',
          'stock_id'=>'SK003lc50',
          'customer_id'=>'CY15E3i01',
          'sell_date'=>'2017-11-29',
          'total_payment'=>'581.00'
        ]);

        DB::table('sell_logs')->insert([
          'Sell_logs_id'=>'SL31c3584',
          'stock_id'=>'SK003lc50',
          'customer_id'=>'CY15E3i01',
          'sell_date'=>'2017-12-02',
          'total_payment'=>'1638.00'
        ]);

        DB::table('sell_logs')->insert([
          'Sell_logs_id'=>'SL21c8404',
          'stock_id'=>'SK002lc20',
          'customer_id'=>'CY17E3i01',
          'sell_date'=>'2018-01-03',
          'total_payment'=>'510.00'
        ]);
    }
}
