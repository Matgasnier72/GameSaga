<?php

namespace Database\Seeders;

use App\Models\reponse;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class reponseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        reponse::create([
            'choix' => "oui C'est génial",
            'sondage_id' => 1
        ]);
        reponse::create([
            'choix' => "non je préfere m'arracher les yeux",
            'sondage_id' => 1
        ]);
        reponse::create([
            'choix' => "ça me rend indifférent",
            'sondage_id' => 1
        ]);
        reponse::create([
            'choix' => "c'était mieux avant",
            'sondage_id' => 1
        ]);
    }
}
