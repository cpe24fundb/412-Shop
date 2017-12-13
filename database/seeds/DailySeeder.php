<?php

use Illuminate\Database\Seeder;

class DailySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('dailies')->delete();
        DB::table('dailies')->insert([
            'id' => 1002568,
            'created_date' => '2017-12-13'
        ]);
    }
}