<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CommerceController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});*/

Route::post('/register', [AuthController::class, 'register']);

Route::post('/login', [AuthController::class, 'login']);

Route::post('/userinfo', [AuthController::class, 'infouser'])->middleware('auth:sanctum');

Route::post('/commercenew', [CommerceController::class, 'create'])->middleware('auth:sanctum');

Route::post('/commerceinfo', [CommerceController::class, 'retrieve'])->middleware('auth:sanctum');

Route::post('/commerceupdate', [CommerceController::class, 'update'])->middleware('auth:sanctum');

Route::post('/commercedelete', [CommerceController::class, 'delete'])->middleware('auth:sanctum');

