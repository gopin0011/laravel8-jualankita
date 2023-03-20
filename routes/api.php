<?php

use Illuminate\Http\Request;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/auth/login', function (Request $request) {
    return response()->json(['code' => '200', 'status' => true]);
});

Route::post('/auth/login', [App\Http\Controllers\Api\AuthController::class, 'login']);
Route::post('/auth/logout', [App\Http\Controllers\Api\AuthController::class, 'logout']);

Route::get('/home', 'App\Http\Controllers\HomeController@index');
Route::get('/product', 'App\Http\Controllers\ProductController@product');
Route::get('/categories', 'App\Http\Controllers\CategoriesController@categories');

/**
 * route "/user"
 * @method "GET"
 */
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});