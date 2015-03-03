<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function getIndex()
	{
		$vw = View::make('home.index');
		$vw->title = "Alchin's Disposal, Inc | Residential and Commercial Garbage Removal in Livingston County";
        $vw->description = "Alchin's Disposal, Inc";

        return $vw;
	}

	public function getContact()
	{
		$vw = View::make('home.contact');
		$vw->title = "Contact Us | Alchin's Disposal, Inc";
        $vw->description = "Contact us at Alchin's Disposal, Inc";
        $vw->active_page = "contact";

        return $vw;
	}

}
