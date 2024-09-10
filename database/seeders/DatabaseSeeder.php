<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        $this->call([
            roleSeeder::class,
            userSeeder::class,
            articleSeeder::class,
            genreSeeder::class,
            imageSeeder::class,
            messageSeeder::class,
            reponseSeeder::class,
            sondageSeeder::class,
            commentaireSeeder::class
            
        ]);

       /*  User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]); */
    }
}
