<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EditorialesApiController;
use App\Http\Controllers\AutoresApiController;
use App\Http\Controllers\GenerosApiController;

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

Route::controller(EditorialesApiController::class)->group(function(){
    Route::get('/editoriales','index');
    Route::get('/editoriales/{id}','show');
    Route::get('/editoriales/bycode/{code}','details');
    Route::post('/editoriales','store');
    Route::put('/editoriales','update');
    Route::delete('/editoriales/{id}','destroy');
});

Route::controller(AutoresApiController::class)->group(function(){
    Route::get('/autores','index');
    Route::get('/autores/{id}','show');
    Route::get('/autores/bycode/{code}','details');
    Route::post('/autores','store');
    Route::put('/autores','update');
    Route::delete('/autores/{id}','destroy');
});

Route::controller(GenerosApiController::class)->group(function(){
    Route::get('/generos','index');
    Route::get('/generos/{id}','show');
    Route::post('/generos','store');
    Route::put('/generos','update');
    Route::delete('/generos/{id}','destroy');
});