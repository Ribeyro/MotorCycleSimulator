<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('user/all', [\App\Http\Api\UserController::class, 'getAll']);
Route::get('user/{dni}', [\App\Http\Api\UserController::class, 'show']);
Route::post('user', [\App\Http\Api\UserController::class, 'store']);

// ...existing code...