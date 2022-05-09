<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        $users = [
            [
                'id'             => 1,
                'name'           => 'Admin',
                'email'          => 'maitrypaunikar.27@gmail.com',
                'password'       => bcrypt('maitry123#'),
                'remember_token' => null,
            ],
        ];

        User::insert($users);
    }
}
