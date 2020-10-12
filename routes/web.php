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

Route::get('/pricing','HomeController@pricing');
Route::get('/education','HomeController@education');
Route::get('/healthcare','HomeController@healthcare');
Route::get('/legal','HomeController@legal');
Route::get('/financial-institutions','HomeController@financial');
Route::get('/human-resources','HomeController@resources');
Route::get('/industries','HomeController@industries');
