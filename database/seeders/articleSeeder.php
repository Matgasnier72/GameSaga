<?php

namespace Database\Seeders;

use App\Models\article;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class articleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        article::create([
            'titre' => "Skyrim",
            'user_id' => 2,
            "contenu" => "surement le meilleur action rpg 3D de tous les temps, a tester absolument avec des mods.Attention, destruction de toute vie sociable possible",
            "note_auteur" => 20,
            "statut" => "ok"
        ]);
    }
}
