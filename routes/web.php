<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/halaman', function(){
    return view('halaman.index');
});

Route::get('/halaman/pubspeak', function(){
    return view('halaman.RoadmapPubSpeak');
});

Route::get('/halaman/ailiterature', function(){
    return view('halaman.RoadmapLiteratureAI');
});

Route::get('/halaman/personalbranding', function(){
    return view('halaman.RoadmapPersonalBranding');
});

Route::get('/halaman/freelancing', function(){
    return view('halaman.RoadmapFreelancing');
});