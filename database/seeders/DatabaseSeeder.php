<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // menambahkan user baru ke database dengan nama "Test User" dan email "

        User::create([
            'name' => 'Muhammad Sholahuddin',
            'email' => 'admin@safaribank.com',
            'password' => Hash::make('safari123'),
        ]);
    }
}
