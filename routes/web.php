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
Route::get('/industries','HomeController@industries');
Route::get('/terms','HomeController@terms');
Route::get('/privacy-statement','HomeController@privacy');

Route::group(['prefix'=>'industries'], function (){
	//industries/education
	Route::get('/education','HomeController@education');
	Route::get('/healthcare','HomeController@healthcare');
	Route::get('/legal','HomeController@legal');
	Route::get('/financial-institutions','HomeController@financial');
	Route::get('/human-resources','HomeController@resources');
	Route::get('/manufacturing','HomeController@manufacturing');
	Route::get('/organizations','HomeController@organizations');
	Route::get('/sales','HomeController@sales');
	Route::get('/startups','HomeController@startups');
	Route::get('/sports-entertainment','HomeController@sports');
	Route::get('/technology','HomeController@manufacturing');
	Route::get('/automotive','HomeController@automotive');
	Route::get('/franchises','HomeController@franchises');
} );
