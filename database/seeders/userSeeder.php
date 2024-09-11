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
            'pseudo' => 'administrateur',
            'email' => 'admin@admin.net',
            'password' => 'test_Laravel_project',
            'statut' => 'ok',
            'role_id' => 3
        ]);
        User::create([
            'pseudo' => 'redacteur',
            'email' => 'redac@admin.net',
            'password' => 'test_Laravel_project',
            'statut' => 'ok',
            'role_id' => 2
        ]);
        User::create([
            'pseudo' => 'user',
            'email' => 'user@admin.net',
            'password' => 'test_Laravel_project',
            'statut' => 'ok',
            'role_id' => 1
        ]);
    }
}
