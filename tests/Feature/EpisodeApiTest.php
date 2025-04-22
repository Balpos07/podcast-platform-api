<?php

namespace Tests\Feature;

use App\Models\Episode;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class EpisodeApiTest extends TestCase
{
    use RefreshDatabase;

    public function test_get_single_episode()
    {
        $episode = Episode::factory()->create();

        $response = $this->getJson("/api/episodes/{$episode->id}");

        $response->assertStatus(200)
            ->assertJsonStructure([
                'data' => [
                    'id', 'title', 'description', 'audio_url',
                    'duration', 'published_at', 'podcast',
                    'created_at', 'updated_at'
                ]
            ]);
    }
}