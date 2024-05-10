<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserSeeder extends Seeder
{
    public function run()
    {
        // Tambahkan data rizal
        User::create([
            'name' => 'admin',
            'username' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('admin'),
            'role' => true,
            'is_active' => true,
        ]);

        // Tambahkan data pengguna biasa
        User::create([
            'name' => 'user1',
            'username' => 'user1',
            'email' => 'user1@gmail.com',
            'password' => Hash::make('user1'),
            'role' => false,
            'is_active' => true,
        ]);

        // Tambahkan data pengguna tambahan
        User::create([
            'name' => 'user2',
            'username' => 'user2',
            'email' => 'user2@gmail.com',
            'password' => Hash::make('user2'),
            'role' => false,
        ]);

    }
}

