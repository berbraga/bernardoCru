<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiController;


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

// [UserController::class, 'getAllUsers']'ApiController@getAllStudents'
Route::get('/students', [ApiController::class, 'getAllStudents']);

// 'ApiController@getStudent'
Route::get('/students/{id}', [ApiController::class, 'getStudent']);

// 'ApiController@createStudent'
Route::post('/students', [ApiController::class, 'createStudent']);

// 'ApiController@updateStudent'
Route::put('/students/{id}', [ApiController::class, 'updateStudent']);

// 'ApiController@deleteStudent'
Route::delete('/students/{id}', [ApiController::class, 'deleteStudent']);
