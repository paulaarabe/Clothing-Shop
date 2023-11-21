<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StyleController;
use App\Http\Controllers\PartController;

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

Route::apiResource('styles', StyleController::class);
Route::apiResource('parts', PartController::class);

Route::get('styles/{id}/parts', [StyleController::class, 'getPartsByStyle']);

Route::get('/styles', [StyleController::class, 'index']);
Route::post('/styles', [StyleController::class, 'store']);
Route::get('/styles/{id}', [StyleController::class, 'show']);
Route::put('/styles/{id}', [StyleController::class, 'update']);
Route::delete('/styles/{id}', [StyleController::class, 'destroy']);

Route::get('/parts', [PartController::class, 'index']);
Route::post('/parts', [PartController::class, 'store']);
Route::get('/parts/{id}', [PartController::class, 'show']);
Route::put('/parts/{id}', [PartController::class, 'update']);
Route::delete('/parts/{id}', [PartController::class, 'destroy']);
