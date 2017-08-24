@extends('layouts.default')
@section('content')

<h1>Recycle Center</h1>

<p class="text-center"><strong>Hours: Mon-Fri 8:30am-4:30pm</strong></p>

<div class="row">
	<div class="col-xs-4 col-sm-5 text-right">
		$3.00 per visit
	</div>
	<div class="col-xs-3 col-sm-1 text-center">
		-OR-
	</div>
	<div class="col-xs-5">
		$20.00 Annual Membership (applies to entire household)<br />
        $15.00 Annual Membership for Seniors (55+) (applies to entire household)
	</div>
</div>

<h2>Please Follow The Guidelines Below When Recycling</h2>

<ul>
	<li>We ask that you please visit the office <strong>BEFORE</strong> dropping off recyclable materials.</li>
    <li>Identify recyclable materials by finding recycling number on the bottom of the item.</li>
    <li><strong>WHEN IN DOUBT, THROW IT OUT!!</strong></li>
    <!--<li><strong>NO</strong> plastic bags, motor oil bottles or Styrofoam in the plastic recycling container!!</li>-->
</ul>

<h2>Recycle Items Accepted</h2>

<ul>
	<li>#1 Plastic – Water bottles, any clear plastic.</li>
    <li>#2 Plastic – Milk jugs, laundry detergent jugs, any cloudy plastic containers.</li>
    <li>#3-#7 Plastic – Fast food cups, butter tubs, flower pots.
    	<!--<ul>
    		<li>NO STYROFOAM IN PLASTIC CONTAINER!!<br />
STYROFOAM MUST BE PLACED IN THE MISCELLANEOUS CONTAINER</li>
		</ul>--></li>
	<li>Corrugated Cardboard Container – Brown cardboard only and pizza boxes.
		<ul>
			<li>PLEASE BREAK DOWN ALL CARDBOARD BOXES!!</li>
		</ul>
	</li>
	<li>Boxboard/Glossy Cardboard – Multi-colored/printed/glossy cardboard.
		<ul>
			<li>ALL FOOD PACKAGES ARE CONSIDERED BOXBOARD/GLOSSY CARDBOARD!!<br />
PLEASE BREAK DOWN ALL BOXES!!</li>
		</ul></li>
	<!--<li>Miscellaneous – Glossy magazines and catalogs, plastic bags, office paper and Styrofoam. Example: Tissue and paper towel rolls, Time, People, JC Penney, Lands End.
		<ul>
			<li>PLEASE BREAK DOWN ALL MATERIAL!!</li>
		</ul></li> -->
	<li>Tin Cans<!-- &amp; Aluminum
		<ul>
			<li>NO PLASTIC BAGS IN STEEL CONTAINER!!</li>
		</ul>--></li>
	<li>Glass Bin – Brown and clear glass only!
		<ul>
			<li>NO GREEN OR BLUE GLASS ACCEPTED!!</li>
		</ul></li>
</ul>

<!--<p class="text-center"><img src="{{url('/')}}/img/recycling1.jpg" width="552" height="289" alt="Recycling Center" class="featured-img img-responsive center-block margin-bottom-20" /></p>-->

<p class="lead text-danger alchin-blue">We do not accept plastic bags, garbage bags, motor oil bottles, styrofoam, glossy magazines, catalogs, or office paper for recycling!!</p>

<p>Click <a href="{{url('/')}}/recycleapp.pdf" target="_blank">HERE</a> for the Membership Application. You can print this out, fill it in and either mail it to us with your check or drop it off at our office.</p>

@stop
