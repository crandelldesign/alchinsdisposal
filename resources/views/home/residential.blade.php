@extends('layouts.default')
@section('content')

<h1>Residential Customers</h1>
<img class="pull-right img-responsive featured-img" src="{{url('/')}}/img/price-list1.jpg" alt="Residential Customers">

<h2>Price List</h2>

<h3>Our Rates</h3>
<ul>
	<li><strong>Using Own Bag or Cans</strong>
    	<ul>
        	<li>Weekly Service: $17.75 per month</li>
            <!--<li>Every Other Week Service: $11.25 a month</li>-->
            <!--<li>Once a Month Service: $6.00 per month</li>-->
        </ul></li>
    <li><strong>With 65 gallon curb-cart</strong>
        <ul>
            <li>Weekly Service: $16.75 per month</li>
        </ul></li>
	<li><strong>With a 96 gallon curb-cart</strong>
    	<ul>
        	<li>Weekly Service: $19.75 per month</li>
            <!--<li>Every Other Week Service: $13.25 per month</li>-->
            <!--<li>Once a Month Service: $8.00 per month</li>-->
        </ul></li>
</ul>

<p class="h3">We offer a senior citizen rate (55 years of age or older)<br>
<small><span class="alchin-red">Note: Proof of Age Required</span></small></p>
<ul>
	<li><strong>Using Own Bag or Cans</strong>
    	<ul>
        	<li>Weekly Service: $12.00 per month</li>
        </ul></li>
    <li><strong>With 65 gallon curb-cart</strong>
        <ul>
            <li>Weekly Service: $14.00 per month</li>
        </ul></li>
</ul>

<p>Billing Cycles are as follows: monthly, bi-monthly, quarterly, semi-annually, or annually. <span class="alchin-red">To start service with us, we require 3 months prepayment.</span></p>

<p>We offer association and subdivision rates. Please contact our office for more information.</p>

<h3>Trash Limit</h3>

<div class="residential-limits">
    <div class="row-flex">
        <div><strong>Without 96 gallon curb-cart</strong></div>
        <div>Six (6) 30 gallon size bags OR three (3) 40 gallon size cans.</div>
    </div>
    <div class="row-flex">
        <div><strong>With 65 gallon curb-cart</strong></div>
        <div>Cart full only.</div>
    </div>
    <div class="row-flex">
        <div><strong>With 96 gallon curb-cart</strong></div>
        <div>Cart full plus two (2) 30 gallon size bags or one (1) 40 gallon size can.</div>
    </div>
    <div class="row-flex">
        <div>Extra items above the trash limit must be called into the office at least one (1) business day before trash pick-up day to guarantee pick-up. You will be informed at the time of your contact with our office if there will be an additional charge for the extra item(s).</div>
    </div>
</div>

<p class="text-uppercase alchin-red">Scheduling of extra items cannot be emailed to Alchin's at any time.</p>

<p class="h4 alchin-red">Alchin's Disposal is not responsible for lost, stolen or damaged refuse receptacles that are not the property of Alchin's Disposal.</p>

<h3>Late Set Outs and Missed Stop Policy</h3>

<p>If a stop is determined to have been missed due to driver error, we will only be able to return for pick up if the miss is reported to the office by calling 517-223-7119 within 24 hours. Please allow until the end of the next business day for the issue to be corrected, and your refuse to be picked up.</p>
<p>If a stop is determined to have not been out at the time the driver is at the residence, we will not return to pick up the refuse.</p>

@stop
