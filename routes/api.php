<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\CategoryController;
use App\Http\Controllers\Api\PodcastController;
use App\Http\Controllers\Api\EpisodeController;

Route::middleware('api')->group(function () {
    // Categories
    Route::get('/categories', [CategoryController::class, 'index']);
    Route::get('/categories/{category}', [CategoryController::class, 'show']);
    
    // Podcasts
    Route::get('/podcasts', [PodcastController::class, 'index']);
    Route::get('/podcasts/{podcast}', [PodcastController::class, 'show']);
    
    // Episodes
    Route::get('/episodes/{episode}', [EpisodeController::class, 'show']);
});