<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Podcast;
use Illuminate\Database\Eloquent\Factories\Factory;

class PodcastFactory extends Factory
{
    protected $model = Podcast::class;

    public function definition()
    {
        return [
            'category_id' => Category::factory(),
            'title' => $this->faker->sentence(3),
            'slug' => $this->faker->slug,
            'description' => $this->faker->paragraph,
            'image_url' => $this->faker->imageUrl(640, 480, 'podcast'),
            'is_featured' => $this->faker->boolean(20),
        ];
    }
}