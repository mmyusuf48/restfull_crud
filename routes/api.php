<?php

use App\Http\Controllers\Api\v1\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');

Route::get('/user',[UserController::class, 'index']);
Route::post('/user',[UserController::class, 'store']);
Route::put('/user',[UserController::class, 'update']);
Route::delete('/user',[UserController::class, 'destroy']);
