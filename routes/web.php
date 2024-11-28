<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/search', \App\Livewire\Search::class);

Route::get('/articles/{article}', \App\Livewire\ShowArticle::class);

