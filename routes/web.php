<?php

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

Route::get('/', 'HomeController@getIndex');
Route::get('/residential', 'HomeController@getResidential');
Route::get('/commercial', 'HomeController@getCommercial');
Route::get('/dumpster-roll-off', function(){ 
    return Redirect::to('/roll-off', 301); 
});
Route::get('/roll-off', 'HomeController@getDumpsterRollOff');
Route::get('/recycling', 'HomeController@getRecycling');
Route::get('/dump-center', 'HomeController@getDumpCenter');
Route::get('/holidays', 'HomeController@getHolidays');
Route::get('/testimonials', 'HomeController@getTestimonials');
Route::get('/payment', 'HomeController@getPayment');
Route::get('/contact', 'HomeController@getContact');
Route::post('/contact', 'HomeController@postContact');

Route::get('/style', function () {
    $view = view('style');
    $view->title = "Alchin's Disposal, Inc | Residential and Commercial Garbage Removal in Livingston County";
    return $view;
});

Route::get('/contact-email', function () {
    $view = view('emails.contact');
    $view->title = "Alchin's Disposal, Inc | Residential and Commercial Garbage Removal in Livingston County";
    return $view;
});
