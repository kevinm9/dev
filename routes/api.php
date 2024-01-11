<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\miController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\FormasdePagoController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\FacturaController;
use App\Http\Controllers\AuthController;
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
Route::apiResource('facturas', FacturaController::class);
Route::apiResource('productos', ProductoController::class);

Route::post('registro', [AuthController::class, 'register']);
Route::post('login', [AuthController::class, 'login']);


Route::middleware('auth:sanctum')->group(function() {
    Route::get('logout', [AuthController::class, 'logout']);
});

