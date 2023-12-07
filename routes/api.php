<?php

use App\Http\Controllers\ProdutosController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::get('produtos', [ProdutosController::class, 'index']);
Route::post('produtos', [ProdutosController::class, 'store']);
Route::put('produtos/{id}', [ProdutosController::class, 'update']);
Route::delete('produtos/{id}', [ProdutosController::class, 'delete']);
