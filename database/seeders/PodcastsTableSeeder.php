<?php

namespace Database\Seeders;

use App\Models\Podcast;
use Illuminate\Database\Seeder;

class PodcastsTableSeeder extends Seeder
{
    public function run()
    {
        Podcast::factory()->count(20)->create();
    }
}