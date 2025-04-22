<?php

namespace Database\Factories;

use App\Models\Episode;
use App\Models\Podcast;
use Illuminate\Database\Eloquent\Factories\Factory;

class EpisodeFactory extends Factory
{
    protected $model = Episode::class;

    public function definition()
    {
        return [
            'podcast_id' => Podcast::factory(),
            'title' => $this->faker->sentence(3),
            'description' => $this->faker->paragraph,
            'audio_url' => $this->faker->url,
            'duration' => $this->faker->numberBetween(300, 3600), // 5-60 minutes
            'published_at' => $this->faker->dateTimeBetween('-1 year', 'now'),
        ];
    }
}