<?php

namespace Database\Factories;

use App\Models\ArticleDette;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ArticleDette>
 */
class ArticleDetteFactory extends Factory
{
    protected $model = ArticleDette::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'id_article' => 2,
            'id_dette' => 3,
            'qteVente' => $this->faker->numberBetween(1, 5),
            'proxVente' => $this->faker->randomFloat(0, 500, 2000),
        ];
    }
}
