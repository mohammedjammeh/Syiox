<?php

use App\Http\Controllers\Api\V1\ScaleController as ApiScaleController;
use App\Http\Controllers\ScaleController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ScaleController::class, 'index'])->name('home');
Route::resource('scales', ScaleController::class);

Route::post('api/scale', [ApiScaleController::class, 'update']);

