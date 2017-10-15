<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         //$this->call('Data_Persons');
         //$this->call('Data_Staffs');
         //$this->call('Data_Stocks');
         //$this->call('Data_Stores');
         //$this->call('Data_Customers');
         //$this->call('Data_Employees');
         $this->call('Data_Managers');
    }
}
