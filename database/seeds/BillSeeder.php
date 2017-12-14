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
            'id' => 6012001,
            'line_total' => 33,
            'created_at' => '2017-11-4 8:00:11',
            'updated_at' => '2017-11-4 8:00:11'
        ]);

        DB::table('bills')->insert([
            'id' => 6012002,
            'line_total' => 34,
            'created_at' => '2017-11-4 8:00:11',
            'updated_at' => '2017-11-4 8:00:11'
        ]);

        DB::table('bills')->insert([
            'id' => 6012003,
            'line_total' => 104,
            'created_at' => '2017-11-4 8:00:11',
            'updated_at' => '2017-11-4 8:00:11'
        ]);

        DB::table('bills')->insert([
            'id' => 6012004,
            'line_total' => 390,
            'created_at' => '2017-11-4 15:28:32',
            'updated_at' => '2017-11-4 15:28:32'
        ]);

        DB::table('bills')->insert([
            'id' => 6012005,
            'line_total' => 47,
            'created_at' => '2017-11-5 10:52:16',
            'updated_at' => '2017-11-5 10:52:16'
        ]);

        DB::table('bills')->insert([
            'id' => 6012006,
            'line_total' => 476,
            'created_at' => '2017-11-5 10:52:16',
            'updated_at' => '2017-11-5 10:52:16'
        ]);
        
        
    }
}
