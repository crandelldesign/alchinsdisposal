<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$app->get('/', 'HomeController@getIndex');
$app->get('/residential', 'HomeController@getResidential');
$app->get('/commercial', 'HomeController@getCommercial');
$app->get('/dumpster-roll-off', 'HomeController@getDumpsterRollOff');
$app->get('/recycling', 'HomeController@getRecycling');
$app->get('/dump-center', 'HomeController@getDumpCenter');
$app->get('/holidays', 'HomeController@getHolidays');
$app->get('/testimonials', 'HomeController@getTestimonials');
$app->get('/payment', 'HomeController@getPayment');
$app->get('/contact', 'HomeController@getContact');