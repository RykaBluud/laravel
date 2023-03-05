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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/machines', 'SearchController@index');
Route::get('/machines/simple', 'SearchController@simple')->name('simple_search');
Route::get('/machines/advance', 'SearchController@advance')->name('advance_search');
