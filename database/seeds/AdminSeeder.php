<?php

use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        \App\User::create([
            'username' => 'xwu',
            'firstname' => 'Admin',
            'lastname' => 'UA',
            'email' => 'xwu33@ua.edu',
            'email_verified_at' => now(),
            'password' => bcrypt('admin'),
            'admin' => 1,
            'approved_at' => now(),
        ]);
    }
}
