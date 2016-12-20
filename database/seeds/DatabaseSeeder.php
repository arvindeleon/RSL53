<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('users')->insert([
            'username' => 'admin',
            'email' => 'admin'.'@gs.app',
            'password' => bcrypt('admin'),
            'type' => 'su',
            'last_login' => Carbon::now(),
        ]);

    }
}