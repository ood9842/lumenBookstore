<?php

use Illuminate\Database\Seeder;

class Data_Customers extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('customers')->insert([
          'C_id'=>'CY12E3i01',
          'person_id'=>'8067547831465',
          'member_id'=>'SE001lc11',
          'points'=>'1200',
          'expired_date'=>'2015-01-01'
        ]);

        DB::table('customers')->insert([
          'C_id'=>'CY12E3i02',
          'person_id'=>'6007883136720',
          'member_id'=>'SE003lc52',
          'points'=>'5000',
          'expired_date'=>'2015-01-01'
        ]);

        DB::table('customers')->insert([
          'C_id'=>'CY13E3i01',
          'person_id'=>'7576150337262',
          'member_id'=>'SE002lc20',
          'points'=>'1500',
          'expired_date'=>'2016-01-01'
        ]);

        DB::table('customers')->insert([
          'C_id'=>'CY13E3i02',
          'person_id'=>'3720440150734',
          'member_id'=>'SE003lc52',
          'points'=>'500',
          'expired_date'=>'2016-01-01'
        ]);

        DB::table('customers')->insert([
          'C_id'=>'CY15E3i01',
          'person_id'=>'3182436824235',
          'member_id'=>'SE003lc52',
          'points'=>'2500',
          'expired_date'=>'2018-01-01'
        ]);

        DB::table('customers')->insert([
          'C_id'=>'CY15E3i02',
          'person_id'=>'6341808665011',
          'member_id'=>'SE001lc11',
          'points'=>'100',
          'expired_date'=>'2018-01-01'
        ]);

        DB::table('customers')->insert([
          'C_id'=>'CY15E3i03',
          'person_id'=>'6341808665012',
          'member_id'=>'SE002lc20',
          'points'=>'100',
          'expired_date'=>'2018-01-01'
        ]);

        DB::table('customers')->insert([
          'C_id'=>'CY15E3i04',
          'person_id'=>'8227885784782',
          'member_id'=>'SE003lc52',
          'points'=>'0',
          'expired_date'=>'2018-01-01'
        ]);

        DB::table('customers')->insert([
          'C_id'=>'CY17E3i01',
          'person_id'=>'7258767136431',
          'member_id'=>'SE002lc20',
          'points'=>'200',
          'expired_date'=>'2020-01-01'
        ]);

        DB::table('customers')->insert([
          'C_id'=>'CY18E3i01',
          'person_id'=>'2568585467446',
          'member_id'=>'SE001lc11',
          'points'=>'0',
          'expired_date'=>'2021-01-01'
        ]);
    }
}
