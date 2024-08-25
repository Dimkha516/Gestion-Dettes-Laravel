<?php

namespace Database\Seeders;

use App\Models\Dette;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DetteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */ 
    public function run(): void
    {
        // CRÉER UNE LISTE DE 5 DETTES:
        Dette::factory()->count(5)->create();
    }
}
