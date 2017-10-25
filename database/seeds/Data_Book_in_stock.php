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
            'stock_id'=>'24707604',
            'book_id'=>'978-3-598-21500-1',
            'amount'=>'73',
        ]);

        DB::table('book_in_stock')->insert([
            'stock_id'=>'21121699',
            'book_id'=>'978-3-598-21501-8',
            'amount'=>'92',
        ]);

        DB::table('book_in_stock')->insert([
            'stock_id'=>'25443861',
            'book_id'=>'978-3-598-21502-5',
            'amount'=>'100',
        ]);

        DB::table('book_in_stock')->insert([
            'stock_id'=>'10134980',
            'book_id'=>'978-3-598-21503-2',
            'amount'=>'77',
        ]);

        DB::table('book_in_stock')->insert([
            'stock_id'=>'12589632',
            'book_id'=>'978-3-598-21504-9',
            'amount'=>'67',
        ]);

        DB::table('book_in_stock')->insert([
            'stock_id'=>'17421858',
            'book_id'=>'978-3-598-21505-6',
            'amount'=>'113',
        ]);

        DB::table('book_in_stock')->insert([
            'stock_id'=>'12256673',
            'book_id'=>'978-3-598-21506-3',
            'amount'=>'70',
        ]);

        DB::table('book_in_stock')->insert([
            'stock_id'=>'1673059',
            'book_id'=>'978-3-598-21507-0',
            'amount'=>'92',
        ]);

        DB::table('book_in_stock')->insert([
            'stock_id'=>'21336114',
            'book_id'=>'978-3-598-21508-7',
            'amount'=>'55',
        ]);

        DB::table('book_in_stock')->insert([
            'stock_id'=>'1232755',
            'book_id'=>'978-3-598-21509-4',
            'amount'=>'71',
        ]);

        DB::table('book_in_stock')->insert([
            'stock_id'=>'13838013',
            'book_id'=>'978-3-598-21510-9',
            'amount'=>'106',
        ]);

        DB::table('book_in_stock')->insert([
            'stock_id'=>'27999362',
            'book_id'=>'978-3-598-21511-1',
            'amount'=>'59',
        ]);

        DB::table('book_in_stock')->insert([
            'stock_id'=>'13599977',
            'book_id'=>'978-3-598-21512-8',
            'amount'=>'81',
        ]);

        DB::table('book_in_stock')->insert([
            'stock_id'=>'12928923',
            'book_id'=>'978-3-598-21513-5',
            'amount'=>'116',
        ]);

        DB::table('book_in_stock')->insert([
            'stock_id'=>'14839083',
            'book_id'=>'978-3-598-21514-2',
            'amount'=>'72',
        ]);
    }
}
