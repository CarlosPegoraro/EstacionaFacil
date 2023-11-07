<?php

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory()->create([
            "name" => "kadu",
            "email" => "kadu@gmail.com",
            "password" => "senha123456",
        ]);

        User::factory()->create([
            "name" => "guibio",
            "email" => "guibio@gmail.com",
            "password" => "senha123456",
        ]);

        User::factory()->create([
            "name" => "pavas",
            "email" => "pavas@gmail.com",
            "password" => "senha123456",
        ]);
    }
}

