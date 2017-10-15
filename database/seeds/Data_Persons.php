<?php

use Illuminate\Database\Seeder;

class Data_Persons extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('persons')->insert([
          'P_id'=>'8067547831465',
          'first_name'=>'customer',
          'last_name'=>'1'
        ]);

        DB::table('persons')->insert([
          'P_id'=>'6007883136720',
          'first_name'=>'customer',
          'last_name'=>'2'
        ]);

        DB::table('persons')->insert([
          'P_id'=>'7576150337262',
          'first_name'=>'customer',
          'last_name'=>'3'
        ]);

        DB::table('persons')->insert([
          'P_id'=>'3720440150734',
          'first_name'=>'customer',
          'last_name'=>'4'
        ]);

        DB::table('persons')->insert([
          'P_id'=>'3182436824235',
          'first_name'=>'customer',
          'last_name'=>'5'
        ]);

        DB::table('persons')->insert([
          'P_id'=>'6341808665011',
          'first_name'=>'customer',
          'last_name'=>'6'
        ]);

        DB::table('persons')->insert([
          'P_id'=>'6341808665012',
          'first_name'=>'customer',
          'last_name'=>'7'
        ]);

        DB::table('persons')->insert([
          'P_id'=>'8227885784782',
          'first_name'=>'customer',
          'last_name'=>'8'
        ]);

        DB::table('persons')->insert([
          'P_id'=>'7258767136431',
          'first_name'=>'customer',
          'last_name'=>'9'
        ]);

        DB::table('persons')->insert([
          'P_id'=>'2568585467446',
          'first_name'=>'customer',
          'last_name'=>'10'
        ]);

        DB::table('persons')->insert([
          'P_id'=>'2508588867446',
          'first_name'=>'manager',
          'last_name'=>'1'
        ]);

        DB::table('persons')->insert([
          'P_id'=>'5660861507563',
          'first_name'=>'manager',
          'last_name'=>'2'
        ]);

        DB::table('persons')->insert([
          'P_id'=>'2511700482175',
          'first_name'=>'manager',
          'last_name'=>'3'
        ]);

        DB::table('persons')->insert([
          'P_id'=>'8178820368166',
          'first_name'=>'stockeeper',
          'last_name'=>'1'
        ]);

        DB::table('persons')->insert([
          'P_id'=>'1747877632543',
          'first_name'=>'stockeeper',
          'last_name'=>'2'
        ]);

        DB::table('persons')->insert([
          'P_id'=>'3202763138651',
          'first_name'=>'stockeeper',
          'last_name'=>'3'
        ]);

        DB::table('persons')->insert([
          'P_id'=>'7732573643531',
          'first_name'=>'employee',
          'last_name'=>'1'
        ]);

        DB::table('persons')->insert([
          'P_id'=>'7075378440561',
          'first_name'=>'employee',
          'last_name'=>'2'
        ]);

        DB::table('persons')->insert([
          'P_id'=>'7175278340545',
          'first_name'=>'employee',
          'last_name'=>'3'
        ]);

        DB::table('persons')->insert([
          'P_id'=>'2255844533369',
          'first_name'=>'employee',
          'last_name'=>'4'
        ]);

        DB::table('persons')->insert([
          'P_id'=>'4566128753424',
          'first_name'=>'employee',
          'last_name'=>'5'
        ]);

        DB::table('persons')->insert([
          'P_id'=>'1103702069060',
          'first_name'=>'employee',
          'last_name'=>'6'
        ]);

        DB::table('persons')->insert([
          'P_id'=>'1203802050061',
          'first_name'=>'employee',
          'last_name'=>'7'
        ]);

        DB::table('persons')->insert([
          'P_id'=>'3006702169039',
          'first_name'=>'employee',
          'last_name'=>'8'
        ]);

        DB::table('persons')->insert([
          'P_id'=>'1103702269160',
          'first_name'=>'employee',
          'last_name'=>'9'
        ]);

        DB::table('persons')->insert([
          'P_id'=>'1013802069059',
          'first_name'=>'employee',
          'last_name'=>'10'
        ]);
    }
}
