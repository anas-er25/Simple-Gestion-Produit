<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\typeProduit;
use function PHPSTORM_META\type;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\produit>
 */
class produitFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            
                'RefPdt'=>fake()->text(5),
                'libPdt'=>fake()->text(10),
                'Prix'=>fake()->randomFloat(4),
                'Qte'=>fake()->randomNumber(3),
                'description'=>fake()->text(50),
                'image'=>fake()->imageUrl(),
                'type_id'=>typeProduit::all()->random()->id
        ];
    }
}
