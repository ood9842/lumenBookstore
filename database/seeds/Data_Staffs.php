<?php

use Illuminate\Database\Seeder;

class Data_Staffs extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//manager
        DB::table('staffs')->insert([
          'person_id'=>'2508588867446',
          'S_id'=>'STb02m001',
          'salary'=>'15000',
          'work_on'=>'1950-01-30'
        ]);

        DB::table('staffs')->insert([
          'person_id'=>'5660861507563',
          'S_id'=>'STb03m002',
          'salary'=>'15000',
          'work_on'=>'2000-01-01'
        ]);

        DB::table('staffs')->insert([
          'person_id'=>'2511700482175',
          'S_id'=>'STb01m003',
          'salary'=>'15000',
          'work_on'=>'2007-08-11'
        ]);

//stockeeper
        DB::table('staffs')->insert([
          'person_id'=>'8178820368166',
          'S_id'=>'STb01s001',
          'salary'=>'12000',
          'work_on'=>'2000-01-30'
        ]);

        DB::table('staffs')->insert([
          'person_id'=>'1747877632543',
          'S_id'=>'STb02s002',
          'salary'=>'12000',
          'work_on'=>'2000-01-31'
        ]);

        DB::table('staffs')->insert([
          'person_id'=>'3202763138651',
          'S_id'=>'STb03s003',
          'salary'=>'12000',
          'work_on'=>'2000-02-01'
        ]);

//employee
        DB::table('staffs')->insert([
          'person_id'=>'7732573643531',
          'S_id'=>'STb01e001',
          'salary'=>'10000',
          'work_on'=>'1999-12-01'
        ]);

        DB::table('staffs')->insert([
          'person_id'=>'7075378440561',
          'S_id'=>'STb02e002',
          'salary'=>'10000',
          'work_on'=>'1999-12-02'
        ]);

        DB::table('staffs')->insert([
          'person_id'=>'7175278340545',
          'S_id'=>'STb03e003',
          'salary'=>'10000',
          'work_on'=>'2000-02-01'
        ]);

        DB::table('staffs')->insert([
          'person_id'=>'2255844533369',
          'S_id'=>'STb01e004',
          'salary'=>'9000',
          'work_on'=>'2001-08-12'
        ]);

        DB::table('staffs')->insert([
          'person_id'=>'4566128753424',
          'S_id'=>'STb02e005',
          'salary'=>'9000',
          'work_on'=>'2001-12-05'
        ]);

        DB::table('staffs')->insert([
          'person_id'=>'1103702069060',
          'S_id'=>'STb03e006',
          'salary'=>'9000',
          'work_on'=>'2000-12-12'
        ]);

        DB::table('staffs')->insert([
          'person_id'=>'1203802050061',
          'S_id'=>'STb01e007',
          'salary'=>'9000',
          'work_on'=>'2002-12-12'
        ]);

        DB::table('staffs')->insert([
          'person_id'=>'3006702169039',
          'S_id'=>'STb02e008',
          'salary'=>'9000',
          'work_on'=>'2000-12-12'
        ]);

        DB::table('staffs')->insert([
          'person_id'=>'1103702269160',
          'S_id'=>'STb03e009',
          'salary'=>'9000',
          'work_on'=>'2005-05-05'
        ]);

        DB::table('staffs')->insert([
          'person_id'=>'1013802069059',
          'S_id'=>'STb01e010',
          'salary'=>'9000',
          'work_on'=>'2006-05-04'
        ]);
    }
}
