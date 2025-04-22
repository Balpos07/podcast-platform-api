<?php

namespace Tests\Feature;

use App\Models\Podcast;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class PodcastApiTest extends TestCase
{
    use RefreshDatabase;

    public function test_get_all_podcasts()
    {
        Podcast::factory()->count(10)->create();

        $response = $this->getJson('/api/podcasts');

        $response->assertStatus(200)
            ->assertJsonCount(10, 'data')
            ->assertJsonStructure([
                'data' => [
                    '*' => [
                        'id', 'title', 'slug', 'description',
                        'image_url', 'is_featured', 'created_at', 'updated_at'
                    ]
                ],
                'links',
                'meta'
            ]);
    }

    public function test_filter_podcasts_by_category()
    {
        $podcast = Podcast::factory()->create();
        $categoryId = $podcast->category_id;

        $response = $this->getJson("/api/podcasts?category_id={$categoryId}");

        $response->assertStatus(200)
            ->assertJsonCount(1, 'data')
            ->assertJsonPath('data.0.category_id', $categoryId);
    }

    public function test_get_single_podcast()
    {
        $podcast = Podcast::factory()->create();

        $response = $this->getJson("/api/podcasts/{$podcast->id}");

        $response->assertStatus(200)
            ->assertJsonStructure([
                'data' => [
                    'id', 'title', 'slug', 'description',
                    'image_url', 'is_featured', 'category', 'episodes',
                    'created_at', 'updated_at'
                ]
            ]);
    }
}