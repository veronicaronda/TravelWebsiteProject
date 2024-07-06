<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;


Route::get('/', 
    [PublicController::class, 'home']
)->name('home');

Route::get('/postcard/{location}', 
    [PublicController::class, 'showPostcard']
)->name('postcard.show');


Route::get('/services', 
    [PublicController::class, 'services']
)->name('services');
Route::get('/about', 
    [PublicController::class, 'about']
)->name('about');