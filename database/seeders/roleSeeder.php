<?php

namespace Database\Seeders;

use App\Models\role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class roleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        role::create([
            'nom' => 'user'
        ]);
        role::create([
            'nom' => 'redacteur'
        ]);
        role::create([
            'nom' => 'administrateur'
        ]);
    }
}
