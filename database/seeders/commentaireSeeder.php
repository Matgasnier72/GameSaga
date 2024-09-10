<?php

namespace Database\Seeders;

use App\Models\Commentaire;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class commentaireSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //$users = User::all();
        Commentaire::create([
            'article_id' => 1,
            'user_id' => 3,
            "contenu" => "genial ce jeu",
            "note" => 20,
            "status" => "ok",
        ]);
        Commentaire::factory(30)
            //->count(30)
            //->hasAttached($users, ['active' => true], 'likes')
            ->create();
    }
}
