<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Admin user
        User::create([
            'name' => 'Admin',
            'email' => 'admin@example.com',
            'password' => Hash::make('password'),
            'role' => 'admin',
        ]);

        // Guru BK user
        User::create([
            'name' => 'Guru BK',
            'email' => 'guru@example.com',
            'password' => Hash::make('password'),
            'role' => 'guru_bk',
        ]);

        // Walikelas user
        User::create([
            'name' => 'Walikelas',
            'email' => 'walikelas@example.com',
            'password' => Hash::make('password'),
            'role' => 'walikelas',
        ]);
    }
}
