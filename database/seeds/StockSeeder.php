<?php

use Illuminate\Database\Seeder;

class StockSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('stocks')->delete();
        DB::table('stocks')->insert([
            'id' => 1111,
            'created_at' => '2017-11-4 8:00:11',
            'updated_at' => '2017-11-4 8:00:11',
            'line_total' => 190,
            'user_id' => 631
        ]);

        DB::table('stocks')->insert([
            'id' => 1122,
            'created_at' => '2017-11-4 11:00:11',
            'updated_at' => '2017-11-4 11:00:11',
            'line_total' => 230,
            'user_id' => 648
        ]);

        DB::table('stocks')->insert([
            'id' => 1133,
            'created_at' => '2017-11-4 15:27:43',
            'updated_at' => '2017-11-4 15:27:43',
            'line_total' => 360,
            'user_id' => 646
        ]);

        DB::table('stocks')->insert([
            'id' => 1144,
            'created_at' => '2017-11-4 16:52:06',
            'updated_at' => '2017-11-4 16:52:06',
            'line_total' => 105,
            'user_id' => 642
        ]);

        DB::table('stocks')->insert([
            'id' => 1155,
            'created_at' => '2017-11-4 17:38:29',
            'updated_at' => '2017-11-4 17:38:29',
            'line_total' => 109,
            'user_id' => 681
        ]);

        DB::table('stocks')->insert([
            'id' => 1166,
            'created_at' => '2017-11-4 17:38:29',
            'updated_at' => '2017-11-4 17:38:29',
            'line_total' => 90,
            'user_id' => 681
        ]);
    }
}
