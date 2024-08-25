<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // APPEL DU SEEDER DE LA TABLE ARTICLE:
        // $this->call(ArticleSeeder::class);

        // APPEL DU SEEDER DE LA TABLE CLIENT:
        // $this->call(ClientSeeder::class);

        // APPEL DU SEEDER DE LA TABLE DETTE:
        // $this->call(DetteSeeder::class);

        // APPEL DU SEEDER DE LA TABLE ARTICLE_DETTE:
        $this->call(ArticleDetteSeeder::class);
        // APPEL DU SEEDER DE LA TABLE USER2:

    }
}
