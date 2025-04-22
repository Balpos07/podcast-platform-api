<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Episode extends Model
{
    use HasFactory;

    protected $fillable = [
        'podcast_id', 'title', 'description',
        'audio_url', 'duration', 'published_at'
    ];

    protected $casts = [
        'published_at' => 'datetime'
    ];

    public function podcast(): BelongsTo
    {
        return $this->belongsTo(Podcast::class);
    }
}