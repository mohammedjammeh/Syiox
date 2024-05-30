<?php

use App\Http\Controllers\ScaleController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ScaleController::class, 'index'])->name('home');
Route::resource('scales', ScaleController::class);
