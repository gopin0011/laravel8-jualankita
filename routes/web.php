<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

$langprefix = "/";
if (activelang() == "EN") {
    $langprefix = "/en/";
}

// main core
// Route::get('/', 'App\Http\Controllers\Controller@index');
Route::get($langprefix.'','\App\Http\Controllers\HomeController@home')->name('get.homepage');

Route::get('/product', 'App\Http\Controllers\ProductController@product');
Route::get('/product/quick-view/{slug}', 'App\Http\Controllers\ProductController@ajaxQuickView')->name('get.product.quickView');

Route::get('/logs', '\Rap2hpoutre\LaravelLogViewer\LogViewerController@index')->middleware('APIkey');

Route::get('login', function () {
    return view('pages.auth.login');
})->name("get.auth.login");