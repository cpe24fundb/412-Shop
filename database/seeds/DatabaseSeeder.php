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
        $this->call('ProductCategorySeeder');
        $this->call('StockSeeder');
        $this->call('StockItemSeeder');
        $this->call('BillSeeder');
        $this->call('UserSeeder');
        $this->call('BillItemSeeder');
        $this->call('FeedbackSeeder');
        Schema::enableForeignKeyConstraints();
    }
}
