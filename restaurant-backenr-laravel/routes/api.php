<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Restaurant_controller;
use App\Http\Controllers\user_controller;


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

Route::get('/restaurants', [Restaurant_controller::class, 'getAllRestaurants']);
Route::post('/addr', [Restaurant_controller::class, 'addResto']);
Route::post('/register', [user_controller::class, 'signUp']);
Route::post('/usersl', [user_controller::class, 'login']);
Route::get('/usersList', [user_controller::class, 'getAllUsers']);


