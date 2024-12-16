<?php

namespace Database\Factories;

use App\Models\Utilisateur;
use Illuminate\Database\Eloquent\Factories\Factory;

class UtilisateurFactory extends Factory
{
    protected $model = Utilisateur::class;

    public function definition()
    {
        return [
            'login' => $this->faker->unique()->userName,
            'password' => $this->faker->password,  // Vous pouvez personnaliser cela si nécessaire
            'type' => $this->faker->randomElement(['admin', 'user']),
        ];
    }
}