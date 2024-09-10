<?php

namespace Database\Factories;

use App\Models\Article;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Commentaire>
 */
class CommentaireFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'article_id' => random_int(1,Article::count()),
            'user_id' => random_int(1,User::count()),
            'contenu' => fake()->paragraph(),
            'status' => 'ok',
            'note' => random_int(0,20),
        ];
        
    }
}
