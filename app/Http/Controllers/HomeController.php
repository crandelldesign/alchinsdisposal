<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;

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

    public function postContact(Request $request)
    {
        $validator = $this->validate(
            $request,
            [
                'name' => 'required',
                'email' => 'required',
                'phone' => 'required',
                'message' => 'required',
                'honeyName' => 'size:0'
            ],
            [
                'name.required' => 'Please enter your name.',
                'email.required' => 'Please enter your email address.',
                'phone.required' => 'Please enter your phone number.',
                'message.required' => 'Please enter a message.',
                'honeyName.size' => 'No spam please.'
            ]
        );

        $data = array(
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'phone' => $request->get('phone'),
            'message_text' => $request->get('message'),
        );

        Mail::send('emails.contact', $data, function($message) use ($request)
        {
            $message->to('alchinsdisposal@sbcglobal.net', 'Alchin\'s Disposal');
            $message->bcc('matt@crandelldesign.com', 'Matt Crandell');
            $message->replyTo($request->get('email'), $request->get('name'));
            $message->subject('You\'ve Been Contacted by the Alchin\'s Disposal Website.');
        });

        //Analytics::trackEvent('Email', 'sent', 'Email Sent', 1);

        return redirect('/contact#contact-form')->with('status', 'Thank you for contacting us, we will get back to you as soon as possible.');
    }
}
