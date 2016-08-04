<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function getIndex()
    {
        $view = view('home.index');
        $view->title = "Alchin's Disposal, Inc | Residential and Commercial Garbage Removal in Livingston County";
        $view->description = "Alchin's Disposal, Inc operates with 11 trucks and over 10,500 residential and commercial customers in not only Livingston County, but in the surrounding area as well.";
        $view->active_page = "home";

        return $view;
    }

    public function getResidential()
    {
        $view = view('home.residential');
        $view->title = "Residential Customers | Alchin's Disposal, Inc ";
        $view->description = "Residential serves offered at Alchin's Disposal, Inc";
        $view->active_page = "residential";

        return $view;
    }

    public function getCommercial()
    {
        $view = view('home.commercial');
        $view->title = "Commercial Customers | Alchin's Disposal, Inc ";
        $view->description = "Commercial services offered at Alchin's Disposal, Inc";
        $view->active_page = "commercial";

        return $view;
    }

    public function getDumpsterRollOff()
    {
        $view = view('home.dumpster-roll-off-services');
        $view->title = "Dumpster/Roll-Off Services | Alchin's Disposal, Inc ";
        $view->description = "Cluttered Garage or Room? Get a dumpster from Alchin's Disposal, Inc and clean up that mess.";
        $view->active_page = "dumpster-roll-off-services";

        return $view;
    }

    public function getRecycling()
    {
        $view = view('home.recycling');
        $view->title = "Recycle Center | Alchin's Disposal, Inc";
        $view->description = "Recycle Center at Alchin's Disposal, Inc";
        $view->active_page = "recycling";

        return $view;
    }

    public function getDumpCenter()
    {
        $view = view('home.dump-center');
        $view->title = "Dump Center | Alchin's Disposal, Inc";
        $view->description = "Dump Center at Alchin's Disposal, Inc";
        $view->active_page = "dump-center";

        return $view;
    }

    public function getHolidays()
    {
        $view = view('home.holidays');
        $view->title = "Holiday Schedule | Alchin's Disposal, Inc";
        $view->description = "Holiday Schedule at Alchin's Disposal, Inc";
        $view->active_page = "holidays";

        return $view;
    }

    public function getTestimonials()
    {
        $view = view('home.testimonials');
        $view->title = "Testimonials | Alchin's Disposal, Inc";
        $view->description = "Testimonials for Alchin's Disposal, Inc";
        $view->active_page = "testimonials";

        return $view;
    }

    public function getPayment()
    {
        $view = view('home.payment');
        $view->title = "Make a Payment | Alchin's Disposal, Inc";
        $view->description = "Make a Payment to Alchin's Disposal, Inc";
        $view->active_page = "payment";

        return $view;
    }

    public function getContact()
    {
        $view = view('home.contact');
        $view->title = "Contact Us | Alchin's Disposal, Inc";
        $view->description = "Contact us at Alchin's Disposal, Inc";
        $view->active_page = "contact";

        return $view;
    }
}
