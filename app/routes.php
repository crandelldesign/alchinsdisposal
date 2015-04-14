<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

/* Old Site Redirects */
Route::get('index.html', function()
{
	return Redirect::to('/', 301);
});
Route::get('residential.html', function()
{
	return Redirect::to('/residential', 301);
});
Route::get('commercial.html', function()
{
	return Redirect::to('/commercial', 301);
});
Route::get('clean-up-services.html', function()
{
	return Redirect::to('/dumpster-roll-off', 301);
});
Route::get('recycling.html', function()
{
	return Redirect::to('/recycling', 301);
});
Route::get('holidays.html', function()
{
	return Redirect::to('/holidays', 301);
});
Route::get('testimonials.html', function()
{
	return Redirect::to('/testimonials', 301);
});
Route::get('payment.html', function()
{
	return Redirect::to('/payment', 301);
});
Route::get('contact.html', function()
{
	return Redirect::to('/contact', 301);
});

Route::controller('/', 'HomeController');

App::missing(function($exception)
{
	return Response::view('home.404', array(), 404);
});
