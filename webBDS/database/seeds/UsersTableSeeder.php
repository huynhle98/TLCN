<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

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
        DB::table('users')->insert(
            [
                'name' => 'admin',
                'email'=>'admin@gmail.com',
                'password' => bcrypt('123456')

            ],
            [
                'name'=>'user',
                'email'=>'user@gmail.com',
                'password' => bcrypt('123456')
            ],
        );




    }
}
