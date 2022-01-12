<?php

use App\Http\Controllers\API\MenadzerController;
use App\Http\Controllers\API\RestoranController;
use App\Http\Controllers\API\AuthController;
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

Route::post('register', [AuthController::class, 'register']);
Route::post('login', [AuthController::class, 'login']);

Route::get('restoran', [RestoranController::class, 'index']);
Route::get('restoran/{restoran}', [RestoranController::class, 'show']);
Route::get('menadzer', [MenadzerController::class, 'index']);

Route::group(['middleware' => ['auth:sanctum']], function () {

    Route::put('restoran/{restoran}', [RestoranController::class, 'update']);
    Route::delete('restoran/{restoran}', [RestoranController::class, 'destroy']);
    Route::delete('menadzer/{menadzer}', [MenadzerController::class, 'destroy']);
    Route::post('logout', [AuthController::class, 'logout']);
});
