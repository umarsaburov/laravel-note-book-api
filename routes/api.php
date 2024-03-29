<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NotebookController;

Route::prefix('v1')->group(function (){
    Route::get('/notebook', 'App\Http\Controllers\NotebookController@index');
    Route::post('/notebook', 'App\Http\Controllers\NotebookController@store');
    Route::get('/notebook/{id}', 'App\Http\Controllers\NotebookController@show');
    Route::post('/notebook/{id}', 'App\Http\Controllers\NotebookController@update');
    Route::delete('/notebook/{id}', 'App\Http\Controllers\NotebookController@destroy');

});

/*
|-------------------------last version----------------------------------
Route::prefix('v1')->group(function (){
    Route::get('/notebook', [NotebookController::class, 'index']);
    Route::post('/notebook', [NotebookController::class, 'store']);
    Route::get('/notebook/{id}', [NotebookController::class, 'show']);
    Route::post('/notebook/{id}', [NotebookController::class, 'update']);
    Route::delete('/notebook/{id}', [NotebookController::class, 'destroy']);

});
|--------------------------------------------------------------------------
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
});
*/

