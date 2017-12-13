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
        DB::table('daily')->delete();
        DB::table('daily')->insert([
            'id' => 1002568,
            'created_at' => '2017-12-13 15:00:00',
            'updated_at' => '2017-12-13 15:00:00'
        ]);
    }
}