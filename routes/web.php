<?php

use Illuminate\Support\Facades\Route;

Route::get('/', \App\Livewire\HelloWorld::class);
Route::get('/counter', \App\Livewire\Counter::class);
Route::get('/props', \App\Livewire\Properties::class);
Route::get('/lifecycles', \App\Livewire\Lifecycles::class);
Route::get('/table', \App\Livewire\Table::class);
