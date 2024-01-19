<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::post('/register', [\App\Http\Controllers\AuthController::class, 'register']);
Route::post('/login', [\App\Http\Controllers\AuthController::class, 'login']);
Route::middleware('auth:sanctum')->group(function () {
    Route::post('/annual-leaves', [\App\Http\Controllers\Cuti::class, 'post']);
    Route::get('/annual-leaves', [\App\Http\Controllers\Cuti::class, 'view']);
    Route::get('/annual-leaves/{id}', [\App\Http\Controllers\Cuti::class, 'view_id']);

    Route::post('/logout', [\App\Http\Controllers\AuthController::class, 'logout']);
});