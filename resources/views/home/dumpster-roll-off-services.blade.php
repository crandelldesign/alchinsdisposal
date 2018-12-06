@extends('layouts.default')
@section('content')

<h1>Dumpster/Roll-Off Services</h1>

<ul class="list-inline center-block margin-bottom-20 clean-up-steps">
	<li>1. Cluttered Garage/Room?<br>
		<img src="{{url('/')}}/img/cleanup-step1.jpg" alt="Cluttered Garage/Room?"></li>
	<li>2. Get a Clean-Up Dumpster<br>
		<img src="{{url('/')}}/img/cleanup-step2.jpg" alt="Get a Clean-Up Dumpster"></li>
	<li>3. Result<br>
		<img src="{{url('/')}}/img/cleanup-step3.jpg" alt="Result"></li>
</ul>

<table class="table">
	<tr>
    	<th>Container</th>
        <th>Pricing</th>
        <th>Size</th>
   	</tr><tr>
    	<td>4 Yard</td>
        <td>$120.00 per dump</td>
        <td>5'W X 7'L X 4'T</td>
    </tr><tr>
    	<td>6 Yard</td>
        <td>$170.00 per dump</td>
        <td>5'W X 10'L X 4'T</td>
    </tr>
</table>

<p class="h3 text-center"><strong>DUMPSTERS/ROLL-OFFS PRE-PAY BASIS ONLY!<br />
RATES ARE SUBJECT TO CHANGE WITHOUT NOTIFICATION</strong></p>

<p>4 and 6 yard dumpsters are delivered and picked up on Tuesdays and Thursdays. There is a 2 week time limit on our dumpsters. You MUST contact our office to have the container removed within that 2 week time limit to avoid a $10.00 per day rental fee.</p>

<p><strong class="alchin-purple">ITEMS NOT TAKEN:</strong> Yard Waste, Concrete, Fencing, Gas/Oil Cans, Trees or Branches, Cinder Block, Tires, Appliances w/Freon, Dirt or Rocks, Railroad Ties, Steel (over 4'), Animal Carcasses, Auto or Truck Batteries, Oil Based Paint (Latex and/or Water Based Paint is allowed – paint MUST BE dried and cracked and the lids removed from the can).</p>

<hr>

<!--<h2>We also offer Roll-Off Services for larger clean-up projects</h2>-->

<p class="text-center"><img src="{{url('/')}}/img/clean-up-services2.jpg" width="330" height="165" alt="Roll-Off Services" /></p>

<table class="table">
	<tr>
    	<th>Container</th>
        <th>Pricing</th>
        <th>Size</th>
   	</tr><tr>
    	<td>10 Yard</td>
        <td>$250.00 per dump</td>
        <td>8'W X 12'L X 4'T</td>
    </tr><tr>
    	<td>15 Yard</td>
        <td>$320.00 per dump</td>
        <td>8'W X 15'L X 4'T</td>
    </tr><tr>
    	<td>20 Yard</td>
        <td>$400.00 per dump</td>
        <td>8'W X 22'L X 4'T</td>
    </tr><tr>
    	<td>30 Yard</td>
        <td>$525.00 per dump</td>
        <td>8'W X 22'L X 6'T</td>
    </tr>
</table>

<!--<p class="text-center alchin-red"><strong>ROLL-OFFS ARE PRE-PAY BASIS ONLY!
RATES ARE SUBJECT TO CHANGE WITHOUT NOTIFICATION</strong></p>-->

<p>Roll-offs are delivered and picked up Tuesday through Thursday. There is a 2 week time limit on our roll-offs. You MUST contact our office to have the roll-off removed within that 2 week time limit to avoid a $10.00 per day rental fee.</p>

<!--<p><strong class="alchin-purple">ITEMS NOT TAKEN:</strong> Yard Waste, Concrete, Fencing, Gas/Oil Cans, Trees or Branches, Cinder Block, Tires, Appliances w/Freon, Dirt or Rocks, Railroad Ties, Steel (over 4'), Animal Carcasses, Auto or Truck Batteries, Oil Based Paint (Latex and/or Water Based Paint is allowed – paint MUST BE dried and cracked and the lids removed from the can).</p>-->

<?php /*<h2>Residential Clean-Ups</h2>
<p>Another service we provide is residential clean-ups. When all items are in one area (outside of home or garage), please contact our office to schedule an estimate, which is free of charge. When the estimate is complete, a copy will be left at your home. If you wish to have the clean-up done, contact the office to make arrangements for payment and to schedule a day for the clean-up. Estimates are done on Tuesdays and Thursdays.</p>*/ ?>

@stop
