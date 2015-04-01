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

	public function getResidential()
	{
		$vw = View::make('home.residential');
		$vw->title = "Residential Customers | Alchin's Disposal, Inc ";
        $vw->description = "Alchin's Disposal, Inc";
        $vw->active_page = "residential";

        return $vw;
	}

	public function getCommercial()
	{
		$vw = View::make('home.commercial');
		$vw->title = "Commercial Customers | Alchin's Disposal, Inc ";
        $vw->description = "Alchin's Disposal, Inc";
        $vw->active_page = "commercial";

        return $vw;
	}

	public function getCleanUpServices()
	{
		$vw = View::make('home.clean-up-services');
		$vw->title = "Clean Up Services | Alchin's Disposal, Inc ";
        $vw->description = "Alchin's Disposal, Inc";
        $vw->active_page = "clean-up-services";

        return $vw;
	}

	public function getRecycling()
	{
		$vw = View::make('home.recycling');
		$vw->title = "Recycle and Dump Center | Alchin's Disposal, Inc";
        $vw->description = "Recycle and Dump Center at Alchin's Disposal, Inc";
        $vw->active_page = "recycling";

        return $vw;
	}

	public function getHolidays()
	{
		$vw = View::make('home.holidays');
		$vw->title = "Holiday Schedule | Alchin's Disposal, Inc";
        $vw->description = "Holiday Schedule at Alchin's Disposal, Inc";
        $vw->active_page = "holidays";

        return $vw;
	}

	public function getTestimonials()
	{
		$vw = View::make('home.testimonials');
		$vw->title = "Testimonials | Alchin's Disposal, Inc";
        $vw->description = "Testimonials for Alchin's Disposal, Inc";
        $vw->active_page = "testimonials";

        return $vw;
	}

	public function getPayment()
	{
		$vw = View::make('home.payment');
		$vw->title = "Make a Payment | Alchin's Disposal, Inc";
        $vw->description = "Make a Payment to Alchin's Disposal, Inc";
        $vw->active_page = "payment";

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
