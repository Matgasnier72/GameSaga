<?php

namespace Database\Seeders;

use App\Models\Message;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class messageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        message::create([
            'titre' => "it's a trap",
            'contenu' => 'nouveau sondage sur la post-logie star wars, merci de bien vouloir participer avant le 15/09/2000',
            'auteur_id' => 1
        ]);
    }
}
