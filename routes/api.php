<?php

use App\Http\Controllers\ProjectController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\TestEntryController;
use Illuminate\Support\Facades\Route;

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');

Route::get('/projects', [ProjectController::class, 'index']);
Route::get('/projects/{id}', [ProjectController::class, 'show']);
Route::post('/projects', [ProjectController::class, 'store']);
Route::put('/projects/{id}', [ProjectController::class, 'update']);
Route::delete('/projects/{id}', [ProjectController::class, 'destroy']);

Route::get('/rooms', [RoomController::class, 'index']);
Route::get('/rooms/{id}', [RoomController::class, 'show']);
Route::post('/rooms', [RoomController::class, 'store']);
Route::put('/rooms/{id}', [RoomController::class, 'update']);
Route::delete('/rooms/{id}', [RoomController::class, 'destroy']);

Route::get('/tests', [TestEntryController::class, 'index']);
Route::get('/tests/{id}', [TestEntryController::class, 'show']);
Route::post('/tests', [TestEntryController::class, 'store']);
Route::put('/tests/{id}', [TestEntryController::class, 'update']);
Route::delete('/tests/{id}', [TestEntryController::class, 'destroy']);
