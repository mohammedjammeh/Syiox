<?php

use App\Http\Controllers\Api\V1\TrackingController;
use Illuminate\Support\Facades\Route;

Route::post('/v1/scales/update', [TrackingController::class, 'update']);
