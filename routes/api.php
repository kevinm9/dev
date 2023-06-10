<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\miController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\FormasdePagoController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/mi', [miController::class, 'index']);

Route::apiResource('categorias', CategoriaController::class);
Route::apiResource('formasdepagos', FormasdePagoController::class);
