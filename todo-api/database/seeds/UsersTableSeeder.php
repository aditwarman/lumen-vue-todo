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
        DB::table('users')->insert([
            'name' => 'Adit warman',
            'email' => 'aditwarman@example.com',
            'password' => app('hash')->make('aditwarman'),
            'api_token' => str_random(128),
        ]);
    }
}
