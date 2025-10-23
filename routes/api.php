<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('api/user/all', [\App\Http\Api\UserController::class, 'getAll']);
Route::get('api/user/{dni}', [\App\Http\Api\UserController::class, 'show']);
Route::post('api/user', [\App\Http\Api\UserController::class, 'store']);

// ...existing code...