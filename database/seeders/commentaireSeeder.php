<?php

namespace Database\Seeders;

use App\Models\commentaire;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class commentaireSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        commentaire::create([
            'article_id' => 1,
            'user_id' => 3,
            "contenu" => "genial ce jeu",
            "note" => 20,
            "statut" => "ok",
        ]);
    }
}
