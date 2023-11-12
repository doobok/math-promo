<?php

use Illuminate\Support\Facades\Route;

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
Route::get('/', 'App\Http\Controllers\PagesController@promoPage')->name('index');
Route::view('/policy', 'policy')->name('policy');

Route::get('/sitemap.xml', function () {
  return response()->view('sitemap')->header('Content-Type', 'text/xml');
})->name('sitemap');



Route::get('/{slug}', 'App\Http\Controllers\PagesController@promoPage')->name('page');
