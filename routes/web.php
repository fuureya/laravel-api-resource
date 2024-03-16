<?php

use App\Livewire\About;
use App\Livewire\Posts\Index;
use App\Livewire\Users\Show;
use Illuminate\Support\Facades\Route;

Route::get('/about', About::class)->name('about');
Route::get('/post', Index::class)->name('post');
route::get('/user/{user}', Show::class)->name('user.show');
