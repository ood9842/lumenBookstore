<?php

use Illuminate\Database\Seeder;

class Data_Sell_details extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('sell_details')->insert([
        'sell_logs_id'=>'SL11c2001',
        'book_id'=>'978-3-598-21511-1',
        'book_name'=>'BOOK12',
        'price'=>'231.00',
        'amount'=>'1',
        'total_line'=>'231.00'
      ]);

      DB::table('sell_details')->insert([
        'sell_logs_id'=>'SL11c2001',
        'book_id'=>'978-3-598-21513-5',
        'book_name'=>'BOOK14',
        'price'=>'693',
        'amount'=>'1',
        'total_line'=>'693.00'
      ]);

      DB::table('sell_details')->insert([
        'sell_logs_id'=>'SL21c3560',
        'book_id'=>'978-3-598-21514-2',
        'book_name'=>'BOOK15',
        'price'=>'430',
        'amount'=>'1',
        'total_line'=>'430.00'
      ]);

      DB::table('sell_details')->insert([
        'sell_logs_id'=>'SL31c1223',
        'book_id'=>'978-3-598-21505-6',
        'book_name'=>'BOOK6',
        'price'=>'847.00',
        'amount'=>'1',
        'total_line'=>'847.00'
      ]);

      DB::table('sell_details')->insert([
        'sell_logs_id'=>'SL31c1223',
        'book_id'=>'978-3-598-21506-3',
        'book_name'=>'BOOK7',
        'price'=>'284.00',
        'amount'=>'2',
        'total_line'=>'568.00'
      ]);

      DB::table('sell_details')->insert([
        'sell_logs_id'=>'SL31c1223',
        'book_id'=>'978-3-598-21512-8',
        'book_name'=>'BOOK13',
        'price'=>'608',
        'amount'=>'1',
        'total_line'=>'608.00'
      ]);

      DB::table('sell_details')->insert([
        'sell_logs_id'=>'SL11c2532',
        'book_id'=>'978-3-598-21502-5',
        'book_name'=>'BOOK3',
        'price'=>'199.00',
        'amount'=>'1',
        'total_line'=>'199.00'
      ]);

      DB::table('sell_details')->insert([
        'sell_logs_id'=>'SL11c3502',
        'book_id'=>'978-3-598-21500-1',
        'book_name'=>'BOOK1',
        'price'=>'253.00',
        'amount'=>'1',
        'total_line'=>'253.00'
      ]);

      DB::table('sell_details')->insert([
        'sell_logs_id'=>'SL11c3502',
        'book_id'=>'978-3-598-21501-8',
        'book_name'=>'BOOK2',
        'price'=>'576.00',
        'amount'=>'1',
        'total_line'=>'576.00'
      ]);

      DB::table('sell_details')->insert([
        'sell_logs_id'=>'SL31c2650',
        'book_id'=>'978-3-598-21503-2',
        'book_name'=>'BOOK4',
        'price'=>'148.00',
        'amount'=>'1',
        'total_line'=>'148.00'
      ]);

      DB::table('sell_details')->insert([
        'sell_logs_id'=>'SL31c2650',
        'book_id'=>'978-3-598-21504-9',
        'book_name'=>'BOOK5',
        'price'=>'433.00',
        'amount'=>'1',
        'total_line'=>'433.00'
      ]);

      DB::table('sell_details')->insert([
        'sell_logs_id'=>'SL31c3584',
        'book_id'=>'978-3-598-21507-0',
        'book_name'=>'BOOK8',
        'price'=>'714.00',
        'amount'=>'1',
        'total_line'=>'714.00'
      ]);

      DB::table('sell_details')->insert([
        'sell_logs_id'=>'SL31c3584',
        'book_id'=>'978-3-598-21511-1',
        'book_name'=>'BOOK12',
        'price'=>'231.00',
        'amount'=>'1',
        'total_line'=>'231.00'
      ]);

      DB::table('sell_details')->insert([
        'sell_logs_id'=>'SL31c3584',
        'book_id'=>'978-3-598-21513-5',
        'book_name'=>'BOOK14',
        'price'=>'693.00',
        'amount'=>'1',
        'total_line'=>'693.00'
      ]);

      DB::table('sell_details')->insert([
        'sell_logs_id'=>'SL21c8404',
        'book_id'=>'978-3-598-21508-7',
        'book_name'=>'BOOK9',
        'price'=>'510.00',
        'amount'=>'1',
        'total_line'=>'510.00'
      ]);


    }
}
