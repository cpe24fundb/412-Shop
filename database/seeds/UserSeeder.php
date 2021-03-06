<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->delete();
        DB::table('users')->insert([
            'id' => 631,
            'created_at' => '2017-11-4 8:00:11',
            'updated_at' => '2017-11-4 8:00:11',
            'username' => 'aik',
            'password' => Hash::make('aik'),
            'name' => 'aik',
            'manager_flag' => 1,
            'founder_flag' => 1,
            'total_fund' => 999999999,
            'token' => '11111111111111111111111111111111'
        ]);

        DB::table('users')->insert([
            'id' => 648,
            'created_at' => '2017-11-4 8:00:11',
            'updated_at' => '2017-11-4 8:00:11',
            'username' => 'aom',
            'password' => Hash::make('aom'),
            'name' => 'aom',
            'manager_flag' => 1,
            'founder_flag' => 0,
            'total_fund' => 20,
            'token' => '22222222222222222222222222222222'
        ]);

        DB::table('users')->insert([
            'id' => 642,
            'created_at' => '2017-11-4 8:00:11',
            'updated_at' => '2017-11-4 8:00:11',
            'username' => 'opal',
            'password' => Hash::make('opal'),
            'name' => 'opal',
            'manager_flag' => 1,
            'founder_flag' => 0,
            'total_fund' => 15,
            'token' => '33333333333333333333333333333333'
        ]);

        DB::table('users')->insert([
            'id' => 681,
            'created_at' => '2017-11-4 8:00:11',
            'updated_at' => '2017-11-4 8:00:11',
            'username' => 'lek',
            'password' => Hash::make('lek'),
            'name' => 'lek',
            'manager_flag' => 0,
            'founder_flag' => 1,
            'total_fund' => 200,
            'token' => '44444444444444444444444444444444'
        ]);

        DB::table('users')->insert([
            'id' => 646,
            'created_at' => '2017-11-4 8:00:11',
            'updated_at' => '2017-11-4 8:00:11',
            'username' => 'boom',
            'password' => Hash::make('boom'),
            'name' => 'boom',
            'manager_flag' => 0,
            'founder_flag' => 1,
            'total_fund' => 100,
            'token' => '55555555555555555555555555555555'
        ]);
            
    }
}
