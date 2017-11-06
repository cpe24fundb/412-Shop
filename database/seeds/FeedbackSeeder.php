<?php

use Illuminate\Database\Seeder;

class FeedbackSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('feedbacks')->delete();
        DB::table('feedbacks')->insert([
            'id' => 7001,
            'name' => 'Pakin',
            'comment' => 'pom tid money wai 10 bath so soory TT',
            'created_at' => '2017-11-6 8:00:11',
            'updated_at' => '2017-11-6 8:00:11'
        ]);

        DB::table('feedbacks')->insert([
            'id' => 7002,
            'name' => 34,
            'comment' => 'I want to present new goods for sale, It is condom 15mm',
            'created_at' => '2017-11-6 8:00:11',
            'updated_at' => '2017-11-6 8:00:11'
        ]);

        DB::table('feedbacks')->insert([
            'id' => 7003,
            'name' => 104,
            'comment' => 'This is a good shop in 30 years building LOVE IT',
            'created_at' => '2017-11-6 8:00:11',
            'updated_at' => '2017-11-6 8:00:11'
        ]);
    }
}
