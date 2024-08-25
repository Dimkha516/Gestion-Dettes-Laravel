<?php

namespace Database\Seeders;

use App\Models\ArticleDette;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ArticleDetteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Créer une liste de 5 articleDette:
        ArticleDette::factory()->count(5)->create();
    }
}
