<?php

use App\Http\Controllers\AddressController;
use App\Http\Controllers\UserController;
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

Route::get('/users', [UserController::class, 'index']);
Route::get('/addresses', [AddressController::class, 'index']);

Route::get('/users/{id}', [UserController::class, 'findOne']);
Route::get('/addresses/{id}', [AddressController::class, 'findOne']);

Route::post('/users/insert', [UserController::class, 'insert']);
Route::post('/addresses/insert', [AddressController::class, 'insert']);


