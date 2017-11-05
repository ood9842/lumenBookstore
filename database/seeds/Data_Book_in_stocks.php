<?php

use Illuminate\Database\Seeder;

class Data_Book_in_stocks extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('book_in_stocks')->insert([
          'stock_id'=>'SK001lc11',
          'book_id'=>'978-3-598-21500-1',
          'amount'=>'73',
      ]);

      DB::table('book_in_stocks')->insert([
          'stock_id'=>'SK001lc11',
          'book_id'=>'978-3-598-21501-8',
          'amount'=>'92',
      ]);

      DB::table('book_in_stocks')->insert([
          'stock_id'=>'SK002lc20',
          'book_id'=>'978-3-598-21502-5',
          'amount'=>'100',
      ]);

      DB::table('book_in_stocks')->insert([
          'stock_id'=>'SK001lc11',
          'book_id'=>'978-3-598-21503-2',
          'amount'=>'77',
      ]);

      DB::table('book_in_stocks')->insert([
          'stock_id'=>'SK003lc50',
          'book_id'=>'978-3-598-21504-9',
          'amount'=>'67',
      ]);

      DB::table('book_in_stocks')->insert([
          'stock_id'=>'SK003lc50',
          'book_id'=>'978-3-598-21505-6',
          'amount'=>'113',
      ]);

      DB::table('book_in_stocks')->insert([
          'stock_id'=>'SK001lc11',
          'book_id'=>'978-3-598-21506-3',
          'amount'=>'70',
      ]);

      DB::table('book_in_stocks')->insert([
          'stock_id'=>'SK001lc11',
          'book_id'=>'978-3-598-21507-0',
          'amount'=>'92',
      ]);

      DB::table('book_in_stocks')->insert([
          'stock_id'=>'SK002lc20',
          'book_id'=>'978-3-598-21508-7',
          'amount'=>'55',
      ]);

      DB::table('book_in_stocks')->insert([
          'stock_id'=>'SK003lc50',
          'book_id'=>'978-3-598-21509-4',
          'amount'=>'71',
      ]);

      DB::table('book_in_stocks')->insert([
          'stock_id'=>'SK002lc20',
          'book_id'=>'978-3-598-21510-9',
          'amount'=>'106',
      ]);

      DB::table('book_in_stocks')->insert([
          'stock_id'=>'SK001lc11',
          'book_id'=>'978-3-598-21511-1',
          'amount'=>'59',
      ]);

      DB::table('book_in_stocks')->insert([
          'stock_id'=>'SK002lc20',
          'book_id'=>'978-3-598-21512-8',
          'amount'=>'81',
      ]);

      DB::table('book_in_stocks')->insert([
          'stock_id'=>'SK003lc50',
          'book_id'=>'978-3-598-21513-5',
          'amount'=>'116',
      ]);

      DB::table('book_in_stocks')->insert([
          'stock_id'=>'SK003lc50',
          'book_id'=>'978-3-598-21514-2',
          'amount'=>'72',
      ]);
    }
}
