<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
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

    Route::middleware('auth:api')->get('/user', function (Request $request) {
        return $request->user();
    });
    
    



    //Route::post('/register', [AuthController::class, 'register']);

    //Route::post('/login', [AuthController::class, 'login']);



    //Route::post('/me', [AuthController::class, 'me']);

    // accessible to only authenticated users
    //Route::post('/me', [AuthController::class, 'me'])->middleware('auth:sanctum');

    Route::post('/register', 'AuthController@register');
    Route::post('/login', 'AuthController@login');

    Route::get('/show', 'AuthController@show')->middleware('auth:sanctum');