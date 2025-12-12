<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;

// Public Controller
Route::get('/', [PublicController::class, 'home'])->name('home');
