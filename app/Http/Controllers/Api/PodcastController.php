<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\PodcastResource;
use App\Models\Podcast;
use Illuminate\Http\Request;

class PodcastController extends Controller
{
    public function index(Request $request)
    {
        $query = Podcast::query()->with(['category', 'episodes']);

        if ($request->has('category_id')) {
            $query->where('category_id', $request->category_id);
        }

        if ($request->has('is_featured')) {
            $query->where('is_featured', $request->boolean('is_featured'));
        }

        $podcasts = $query->paginate($request->input('per_page', 10));

        return PodcastResource::collection($podcasts);
    }

    public function show(Podcast $podcast)
    {
        return new PodcastResource($podcast->load(['category', 'episodes']));
    }
}