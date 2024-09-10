<?php

namespace Database\Seeders;

use App\Models\user;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class userSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        user::create([
            'pseudo' => 'administrateur',
            'email' => 'admin@admin.net',
            'password' => 'test_Laravel_project',
            'statut' => 'ok',
            'role_id' => 3
        ]);
        user::create([
            'pseudo' => 'redacteur',
            'email' => 'redac@admin.net',
            'password' => 'test_Laravel_project',
            'statut' => 'ok',
            'role_id' => 2
        ]);
        user::create([
            'pseudo' => 'user',
            'email' => 'user@admin.net',
            'password' => 'test_Laravel_project',
            'statut' => 'ok',
            'role_id' => 1
        ]);
    }
}
