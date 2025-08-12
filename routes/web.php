<?php

use App\Http\Controllers\HalamanController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/halaman', [HalamanController::class, "index"]);
Route::get('/halaman/pubspeak', [HalamanController::class, "RoadmapPubSpeak"]);
Route::get('/halaman/ailiterature', [HalamanController::class, "RoadmapLiteratureAI"]);
Route::get('/halaman/personalbranding', [HalamanController::class, "RoadmapPersonalBranding"]);
Route::get('/halaman/freelancing', [HalamanController::class, "RoadmapFreelancing"]);
