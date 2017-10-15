<?php

use Illuminate\Database\Seeder;

class Data_Employees extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//store 1
        DB::table('employees')->insert([
          'staff_id'=>'STb01e001',
          'store_workON'=>'SE001lc11'
        ]);

        DB::table('employees')->insert([
          'staff_id'=>'STb02e002',
          'store_workON'=>'SE001lc11'
        ]);

//store 2
        DB::table('employees')->insert([
          'staff_id'=>'STb03e003',
          'store_workON'=>'SE002lc20'
        ]);

        DB::table('employees')->insert([
          'staff_id'=>'STb01e004',
          'store_workON'=>'SE002lc20'
        ]);

        DB::table('employees')->insert([
          'staff_id'=>'STb02e005',
          'store_workON'=>'SE002lc20'
        ]);

        DB::table('employees')->insert([
          'staff_id'=>'STb03e006',
          'store_workON'=>'SE002lc20'
        ]);

//store 3
        DB::table('employees')->insert([
          'staff_id'=>'STb01e007',
          'store_workON'=>'SE003lc52'
        ]);

        DB::table('employees')->insert([
          'staff_id'=>'STb02e008',
          'store_workON'=>'SE003lc52'
        ]);

        DB::table('employees')->insert([
          'staff_id'=>'STb03e009',
          'store_workON'=>'SE003lc52'
        ]);

        DB::table('employees')->insert([
          'staff_id'=>'STb01e010',
          'store_workON'=>'SE003lc52'
        ]);
    }
}
