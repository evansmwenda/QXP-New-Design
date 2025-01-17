<?php

use Illuminate\Support\Facades\Route;
use RealRashid\SweetAlert\Facades\Alert;


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
	// Alert::success('Success Title', 'Success Message');
	// toast('Success Toast','success');


    return view('welcome');
});
Route::get('/test','HomeController@test');
Route::get('/tester','HomeController@tester');
Route::get('/pricing','HomeController@pricing');
Route::get('/industries','HomeController@industries');
Route::get('/terms','HomeController@terms');
Route::get('/privacy-statement','HomeController@privacy');
Route::get('/features','HomeController@features');
Route::get('/meeting','HomeController@meeting');
Route::get('/login-for-meeting','HomeController@meetingLogin');
Route::get('/about','HomeController@about');
Route::get('/leadership','HomeController@leadership');
Route::get('/downloads','HomeController@downloads');
Route::get('/career','HomeController@career');
Route::get('/get-started','HomeController@getstarted');
Route::get('/mail','HomeController@mail');

Route::post('/schedule','HomeController@createMeeting');
Route::get('/schedule-meeting','HomeController@scheduleMeeting');
Route::post('/live-schedule','HomeController@liveSchedule');
Route::post('/live-schedule-start','HomeController@liveScheduleStart');


Route::post('/joinmeeting','HomeController@joinmeeting');
Route::get('/user/live/{id}','HomeController@join_meeting');
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
	Route::get('/sports','HomeController@sports');
	Route::get('/technology','HomeController@manufacturing');
	Route::get('/automotive','HomeController@automotive');
	Route::get('/franchises','HomeController@franchises');
	Route::get('/manufacturing','HomeController@manufacturing');
} );

Route::group(['prefix'=>'support'],function(){
// inbuid support pages
Route::get('get_started','HomeController@start');
Route::get('qxp_meetings','HomeController@qxpmeetings');
});

//auth routes
Auth::routes();
Route::match(['get','post'],'/verify-user', 'HomeController@verify')->name('verify2');
Route::match(['get','post'],'/register-user', 'HomeController@register2')->name('register2');
Route::post('/register/activate', 'HomeController@sendActivate')->name('send_activate');
Route::get('/register/activate/{id}', 'HomeController@accountActivate')->name('account_activate');
// Route::get('/home/plans', 'HomeController@getPlans')->name('plans');



Route::get('/home', 'HomeController@meeting')->name('home');
Route::get('/support', 'HomeController@support');
Route::get('/home/plans', 'HomeController@getPlans')->name('plans');
Route::get('/home/recordings', 'HomeController@getRecordings')->name('recordings');
Route::get('/home/subscribe', 'HomeController@subscribe');
Route::get('/home/subscribe/{id}', 'HomeController@startSubscription');
Route::get('/payments/redirect', 'HomeController@getCallback');
Route::get('/meeting_landing', 'HomeController@meetingLanding');
Route::get('/business_landing', 'HomeController@businessLanding');
Route::get('/academy_landing', 'HomeController@academyLanding');
Route::get('/higher_ed_landing', 'HomeController@higherEd');
Route::get('/contact_us', 'HomeController@contactUs');

// features amd news feeds
Route::post('/newsfeeds/{id}','HomeController@newsFeeds');
Route::get('/sign_up_for_business', 'HomeController@signUp');

Route::post('/newsfeeds/{id}','HomeController@newsFeeds');
Route::post('/pricing_plan','HomeController@pricingPlan');
Route::post('/subscribeNow', 'HomeController@pricingPlanSubscribe');
Route::post('/contactpost', 'HomeController@contactFrom');
Route::post('/register_business', 'HomeController@registerBusiness');
Route::get('/accessibility-resources', 'HomeController@accessibilityResources');
Route::get('/learning_management_system', 'HomeController@learningManagementSystem');


