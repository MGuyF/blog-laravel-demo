<?php

namespace Database\Factories;

use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * Le modèle que cette fabrique représente.
     *
     * @var string
     */
    // protected $model = Post::class;

    /**
     * Définir les modèles de post par défaut.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence, // Génère un titre de post aléatoire
            'content' => $this->faker->paragraph, // Génère un contenu de post aléatoire
        ];
    }
}
