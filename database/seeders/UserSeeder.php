<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            "user" => "kadu",
            "email" => "kadu@gmail.com",
            "password" => "senha123456",
        ]);

        User::create([
            "user" => "guibio",
            "email" => "guibio@gmail.com",
            "password" => "senha123456",
        ]);

        User::create([
            "user" => "pavas",
            "email" => "pavas@gmail.com",
            "password" => "senha123456",
        ]);

        User::create([
            "user" => "kauan",
            "email" => "kauan@gmail.com",
            "password" => "senha123456",
        ]);
    }
}

