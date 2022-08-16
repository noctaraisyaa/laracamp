<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminUserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user_admin = [
            [
                'name' => 'admin',
                'email' => 'laracamp@gmail.com',
                'email_verified_at' =>  date('Y-m-d H:is', time()),
                'password' => Hash::make('user1234'),
                'is_admin' => true
                
            ]
        ];
    }
}
