<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->truncate();
        
        DB::table('users')->insert([
            [
                'name'     => 'admin',
                'email'    => 'mikiaisora@yahoo.co.jp',
                'password' => bcrypt('09876'),
                'role'     => 1,
            ],
        ]);
    }
}
