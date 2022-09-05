<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiController;
use App\Http\Controllers\apiProductsController;
use App\Http\Controllers\marcaController;
use App\Http\Controllers\doceController;
use App\Http\Controllers\testeController;
use App\Http\Controllers\patientController;


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



Route::apiResource('/products', apiProductsController::class);
Route::apiResource('/doces', doceController::class);
Route::apiResource('/teste', testeController::class);


Route::apiResource('/patient', patientController::class);



Route::apiResource('/marca', marcaController::class);


Route::get('/students', [ApiController::class, 'getAllStudents']);

Route::get('/students/{id}', [ApiController::class, 'getStudent']);

Route::post('/students', [ApiController::class, 'createStudent']);

Route::put('/students/{id}', [ApiController::class, 'updateStudent']);

Route::delete('/students/{id}', [ApiController::class, 'deleteStudent']);
