<?php

namespace Database\Factories;

use App\Models\Dette;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Dette>
 */
class DetteFactory extends Factory
{
    // LE MODÈLE CORRESPONDANT À CETTE FACTORY:
    protected $model = Dette::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    public function definition(): array
    {
        return [
            'date' => $this->faker->date(),
            'montant' => $this->faker->randomFloat(0, 500, 5000),
            'montantDu' => $this->faker->randomFloat(0, 500, 5000),
            'montantRestant' => $this->faker->randomFloat(0, 500, 5000),
            'client_id' => 1
        ];
    }
}
