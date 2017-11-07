<?php

use Illuminate\Database\Seeder;

class BillSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('bills')->delete();
        DB::table('bills')->insert([
            'id' => 1001,
            'line_total' => 33,
            'created_at' => '2017-11-4 8:00:11',
            'updated_at' => '2017-11-4 8:00:11'
        ]);

        DB::table('bills')->insert([
            'id' => 2002,
            'line_total' => 34,
            'created_at' => '2017-11-4 8:00:11',
            'updated_at' => '2017-11-4 8:00:11'
        ]);

        DB::table('bills')->insert([
            'id' => 3003,
            'line_total' => 104,
            'created_at' => '2017-11-4 8:00:11',
            'updated_at' => '2017-11-4 8:00:11'
        ]);
    }
}
