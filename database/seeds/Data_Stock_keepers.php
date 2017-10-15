<?php

use Illuminate\Database\Seeder;

class Data_Stock_keepers extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('employees')->insert([
        'staff_id'=>'STb01s001',
        'store_workON'=>'SE001lc11'
      ]);

      DB::table('employees')->insert([
        'staff_id'=>'STb02s002',
        'store_workON'=>'SE002lc20'
      ]);

      DB::table('employees')->insert([
        'staff_id'=>'STb03s003',
        'store_workON'=>'SE003lc52'
      ]);
    }
}
