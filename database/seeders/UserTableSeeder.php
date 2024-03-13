<?php

namespace Database\Seeders;

use App\Models\User;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = [
            [
                'name'              => 'Zaky Fathur Rahman',
                'email'             => 'zaky@gmail.com',
                'password'          => Hash::make('zaky@12345'),
                'remember_token'    => NULL,
                'created_at'        => date('Y-n-d h:i:s'),
                'updated_at'        => date('Y-n-d h:i:s')
            ],
            [
                'name'              => 'Rahman Fathur Zaky',
                'email'             => 'rahman@gmail.com',
                'password'          => Hash::make('rahman@12345'),
                'remember_token'    => NULL,
                'created_at'        => date('Y-n-d h:i:s'),
                'updated_at'        => date('Y-n-d h:i:s')
            ]
        ];
        User::insert($user);
    }
}
