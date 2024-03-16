<?php

use Illuminate\Support\Facades\Route;

Route::get('/', \App\Livewire\HelloWorld::class);
Route::get('/counter', \App\Livewire\Counter::class);
