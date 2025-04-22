<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class EpisodeResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'title' => $this->title,
            'description' => $this->description,
            'audio_url' => $this->audio_url,
            'duration' => $this->duration,
            'published_at' => $this->published_at,
            'podcast' => new PodcastResource($this->whenLoaded('podcast')),
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}