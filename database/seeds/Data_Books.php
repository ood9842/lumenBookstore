<?php

use Illuminate\Database\Seeder;

class Data_Books extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Book id id ISBN
        DB::table('books')->insert([
            'Book_id'=>'978-3-598-21500-1',
            'Book_name'=>'BOOK1',
            'type'=>'General',
            'edition'=>'6',
            'publisher_name'=>'PUBLISHER101',
            'publisher_year'=>'2002',
            'price'=>'253.00'
        ]);

        DB::table('books')->insert([
            'Book_id'=>'978-3-598-21501-8',
            'Book_name'=>'BOOK2',
            'type'=>'General',
            'edition'=>'6',
            'publisher_name'=>'PUBLISHER201',
            'publisher_year'=>'2009',
            'price'=>'576.00'
        ]);

        DB::table('books')->insert([
            'Book_id'=>'978-3-598-21502-5',
            'Book_name'=>'BOOK3',
            'type'=>'Children',
            'edition'=>'3',
            'publisher_name'=>'PUBLISHER954',
            'publisher_year'=>'2010',
            'price'=>'199.00'
        ]);
        
        DB::table('books')->insert([
            'Book_id'=>'978-3-598-21503-2',
            'Book_name'=>'BOOK4',
            'type'=>'Children',
            'edition'=>'5',
            'publisher_name'=>'PUBLISHER753',
            'publisher_year'=>'2002',
            'price'=>'148.00'
        ]);

        DB::table('books')->insert([
            'Book_id'=>'978-3-598-21504-9',
            'Book_name'=>'BOOK5',
            'type'=>'Education',
            'edition'=>'4',
            'publisher_name'=>'PUBLISHER007',
            'publisher_year'=>'2005',
            'price'=>'433.00'
        ]);

        DB::table('books')->insert([
            'Book_id'=>'978-3-598-21505-6',
            'Book_name'=>'BOOK6',
            'type'=>'Education',
            'edition'=>'2',
            'publisher_name'=>'PUBLISHER101',
            'publisher_year'=>'1999',
            'price'=>'847.00'
        ]);

        DB::table('books')->insert([
            'Book_id'=>'978-3-598-21506-3',
            'Book_name'=>'BOOK7',
            'type'=>'Education',
            'edition'=>'2',
            'publisher_name'=>'PUBLISHER753',
            'publisher_year'=>'2005',
            'price'=>'284.00'
        ]);

        DB::table('books')->insert([
            'Book_id'=>'978-3-598-21507-0',
            'Book_name'=>'BOOK8',
            'type'=>'Novel',
            'edition'=>'1',
            'publisher_name'=>'PUBLISHER007',
            'publisher_year'=>'1998',
            'price'=>'714.00'
        ]);

        DB::table('books')->insert([
            'Book_id'=>'978-3-598-21508-7',
            'Book_name'=>'BOOK9',
            'type'=>'Novel',
            'edition'=>'1',
            'publisher_name'=>'PUBLISHER954',
            'publisher_year'=>'2017',
            'price'=>'510.00'
        ]);

        DB::table('books')->insert([
            'Book_id'=>'978-3-598-21509-4',
            'Book_name'=>'BOOK10',
            'type'=>'Novel',
            'edition'=>'11',
            'publisher_name'=>'PUBLISHER753',
            'publisher_year'=>'2017',
            'price'=>'739.00'
        ]);

        DB::table('books')->insert([
            'Book_id'=>'978-3-598-21510-9',
            'Book_name'=>'BOOK11',
            'type'=>'Fiction',
            'edition'=>'8',
            'publisher_name'=>'PUBLISHER753',
            'publisher_year'=>'2002',
            'price'=>'692.00'
        ]);

        DB::table('books')->insert([
            'Book_id'=>'978-3-598-21511-1',
            'Book_name'=>'BOOK12',
            'type'=>'Fiction',
            'edition'=>'7',
            'publisher_name'=>'PUBLISHER954',
            'publisher_year'=>'2006',
            'price'=>'231.00'
        ]);

        DB::table('books')->insert([
            'Book_id'=>'978-3-598-21512-8',
            'Book_name'=>'BOOK13',
            'type'=>'General',
            'edition'=>'7',
            'publisher_name'=>'PUBLISHER007',
            'publisher_year'=>'2015',
            'price'=>'608.00'
        ]);

        DB::table('books')->insert([
            'Book_id'=>'978-3-598-21513-5',
            'Book_name'=>'BOOK14',
            'type'=>'Education',
            'edition'=>'4',
            'publisher_name'=>'PUBLISHER101',
            'publisher_year'=>'2016',
            'price'=>'693.00'
        ]);

        DB::table('books')->insert([
            'Book_id'=>'978-3-598-21514-2',
            'Book_name'=>'BOOK15',
            'type'=>'Education',
            'edition'=>'1',
            'publisher_name'=>'PUBLISHER101',
            'publisher_year'=>'2014',
            'price'=>'430.00'
        ]);

    }
}
