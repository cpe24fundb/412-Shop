<?php

use Illuminate\Database\Seeder;

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
            'password' => 'aik',
            'name' => 'aik',
            'manager_flag' => 1,
            'founder_flag' => 1,
            'total_fund' => 999999999
        ]);

        DB::table('users')->insert([
            'id' => 648,
            'created_at' => '2017-11-4 8:00:11',
            'updated_at' => '2017-11-4 8:00:11',
            'username' => 'aom',
            'password' => 'aom',
            'name' => 'aom',
            'manager_flag' => 1,
            'founder_flag' => 0,
            'total_fund' => 20
        ]);

        DB::table('users')->insert([
            'id' => 642,
            'created_at' => '2017-11-4 8:00:11',
            'updated_at' => '2017-11-4 8:00:11',
            'username' => 'opal',
            'password' => 'opal',
            'name' => 'opal',
            'manager_flag' => 1,
            'founder_flag' => 0,
            'total_fund' => 15
        ]);

        DB::table('users')->insert([
            'id' => 681,
            'created_at' => '2017-11-4 8:00:11',
            'updated_at' => '2017-11-4 8:00:11',
            'username' => 'lek',
            'password' => 'lek',
            'name' => 'lek',
            'manager_flag' => 0,
            'founder_flag' => 1,
            'total_fund' => 200
        ]);

        DB::table('users')->insert([
            'id' => 646,
            'created_at' => '2017-11-4 8:00:11',
            'updated_at' => '2017-11-4 8:00:11',
            'username' => 'boom',
            'password' => 'boom',
            'name' => 'boom',
            'manager_flag' => 0,
            'founder_flag' => 1,
            'total_fund' => 100
        ]);
            
    }
}
