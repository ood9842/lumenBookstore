<?php

use Illuminate\Database\Seeder;

class Data_Supply_logs extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('supply_logs')->insert([
            'Slogs_id'=>'8547569852',
            'stock_id'=>'SK001lc11',
            'product_line_id'=>'9876543210',
            'supply_date'=>'11/12/2016',
            'total_payment'=>'12650.00',
            'sentOrback'=>'sent'
        ]);

        DB::table('supply_logs')->insert([
            'Slogs_id'=>'1254632569',
            'stock_id'=>'SK001lc11',
            'product_line_id'=>'9876543210',
            'supply_date'=>'11/12/2016',
            'total_payment'=>'28800.00',
            'sentOrback'=>'sent'
        ]);

        DB::table('supply_logs')->insert([
            'Slogs_id'=>'9632541258',
            'stock_id'=>'SK001lc11',
            'product_line_id'=>'9876543210',
            'supply_date'=>'11/12/2016',
            'total_payment'=>'19900.00',
            'sentOrback'=>'sentback'
        ]);

        DB::table('supply_logs')->insert([
            'Slogs_id'=>'9635145268',
            'stock_id'=>'SK001lc11',
            'product_line_id'=>'9876543210',
            'supply_date'=>'10/5/2017',
            'total_payment'=>'14800.00',
            'sentOrback'=>'sent'
        ]);

        DB::table('supply_logs')->insert([
            'Slogs_id'=>'9665412365',
            'stock_id'=>'SK001lc11',
            'product_line_id'=>'9876543210',
            'supply_date'=>'15/8/2017',
            'total_payment'=>'8660.00',
            'sentOrback'=>'sentback'
        ]);

        DB::table('supply_logs')->insert([
            'Slogs_id'=>'8541256328',
            'stock_id'=>'SK002lc20',
            'product_line_id'=>'0123456789',
            'supply_date'=>'20/8/2017',
            'total_payment'=>'12705.00',
            'sentOrback'=>'sent'
        ]);

        DB::table('supply_logs')->insert([
            'Slogs_id'=>'9552365412',
            'stock_id'=>'SK002lc20',
            'product_line_id'=>'0123456789',
            'supply_date'=>'30/8/2017',
            'total_payment'=>'14200.00',
            'sentOrback'=>'sentback'
        ]);

        DB::table('supply_logs')->insert([
            'Slogs_id'=>'9658445213',
            'stock_id'=>'SK002lc20',
            'product_line_id'=>'0123456789',
            'supply_date'=>'10/9/2017',
            'total_payment'=>'17850.00',
            'sentOrback'=>'sent'
        ]);

        DB::table('supply_logs')->insert([
            'Slogs_id'=>'8554123658',
            'stock_id'=>'SK003lc50',
            'product_line_id'=>'0123456789',
            'supply_date'=>'10/9/2017',
            'total_payment'=>'15300.00',
            'sentOrback'=>'sent'
        ]);

        DB::table('supply_logs')->insert([
            'Slogs_id'=>'8541236589',
            'stock_id'=>'SK003lc50',
            'product_line_id'=>'0123456789',
            'supply_date'=>'20/9/2017',
            'total_payment'=>'22170.00',
            'sentOrback'=>'sentback'
        ]);

        DB::table('supply_logs')->insert([
            'Slogs_id'=>'9854125632',
            'stock_id'=>'SK003lc50',
            'product_line_id'=>'0123456789',
            'supply_date'=>'20/9/2017',
            'total_payment'=>'20760.00',
            'sentOrback'=>'sentback'
        ]);

        DB::table('supply_logs')->insert([
            'Slogs_id'=>'9854756841',
            'stock_id'=>'SK003lc50',
            'product_line_id'=>'0123456789',
            'supply_date'=>'29/9/2017',
            'total_payment'=>'23100.00',
            'sentOrback'=>'sentback'
        ]);

        DB::table('supply_logs')->insert([
            'Slogs_id'=>'9652365478',
            'stock_id'=>'SK003lc50',
            'product_line_id'=>'0123456789',
            'supply_date'=>'10/10/2017',
            'total_payment'=>'18240.00',
            'sentOrback'=>'sentback'
        ]);

        DB::table('supply_logs')->insert([
            'Slogs_id'=>'9854125478',
            'stock_id'=>'SK003lc50',
            'product_line_id'=>'0123456789',
            'supply_date'=>'15/10/2017',
            'total_payment'=>'34650.00',
            'sentOrback'=>'sentback'
        ]);

        DB::table('supply_logs')->insert([
            'Slogs_id'=>'9526647851',
            'stock_id'=>'SK003lc50',
            'product_line_id'=>'0123456789',
            'supply_date'=>'20/10/2017',
            'total_payment'=>'43000.00',
            'sentOrback'=>'sentback'
        ]);
    }
}
