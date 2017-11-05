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
         $this->call('Data_Persons');
         $this->call('Data_Staffs');
         $this->call('Data_Stocks');
         $this->call('Data_Stores');
         $this->call('Data_Customers');
         $this->call('Data_Employees');
         $this->call('Data_Managers');
         $this->call('Data_Stock_keepers');
         $this->call('Data_Books');
         $this->call('Data_Book_in_stocks');
         $this->call('Data_Publishers');
         $this->call('Data_Product_lines');
         $this->call('Data_Sell_logs');
         $this->call('Data_Sell_details');
         $this->call('Data_Supply_logs');
         $this->call('Data_Supply_details');
    }
}
