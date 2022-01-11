<?php

use App\Http\Controllers\API\MenadzerController;
use App\Http\Controllers\API\RestoranController;
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

Route::get('restoran', [RestoranController::class, 'index']);
Route::get('restoran/{restoran}', [RestoranController::class, 'show']);
Route::put('restoran/{restoran}', [RestoranController::class, 'update']);
Route::delete('restoran/{restoran}', [RestoranController::class, 'destroy']);

Route::get('menadzer', [MenadzerController::class, 'index']);
Route::delete('menadzer/{menadzer}', [MenadzerController::class, 'destroy']);


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
