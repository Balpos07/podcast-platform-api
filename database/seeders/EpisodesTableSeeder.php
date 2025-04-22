<?php

namespace Database\Seeders;

use App\Models\Episode;
use Illuminate\Database\Seeder;

class EpisodesTableSeeder extends Seeder
{
    public function run()
    {
        Episode::factory()->count(100)->create();
    }
}