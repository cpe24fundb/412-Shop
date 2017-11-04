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
        Schema::disableForeignKeyConstraints();
        $this->call('ProductSeeder');
        $this->call('ProductcategorySeeder');
        $this->call('StockSeeder');
        $this->call('StockitemSeeder');
        $this->call('BillSeeder');
        $this->call('BillitemSeeder');
        Schema::enableForeignKeyConstraints();
    }
}
