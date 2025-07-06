<?php

use App\Http\Controllers\ProductoController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/productos', [ProductoController::class,'index']);
Route::get('/productos/{id}', [ProductoController::class,'show']);
Route::post('/productos', [ProductoController::class,'store']);
Route::put('/productos/{id}', [ProductoController::class,'update']);
Route::delete('/productos/{id}', [ProductoController::class,'destroy']);
