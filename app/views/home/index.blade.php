@extends('home.templates.master')
@section('body')

<h1>Welcome to Alchin's Disposal</h1>

<div class="row">
	<div class="col-sm-4 margin-bottom-20">
		<img class="img-responsive featured-img" src="{{url('/')}}/img/home-img{{rand(1,5)}}.jpg" alt="Alchin's Disposal, Inc.">
	</div>
	<div class="col-sm-5 margin-bottom-20">
		<p>Alchin's Disposal bas been family owned and operated since 1986. We started with two trucks and less than 200 residential stops in the Livingston County area. Today, Alchin's operates with 11 trucks and over 8,000 residential and commercial customers in not only Livingston County, but in the surrounding area as well. We stand behind our reputation of excellent customer service and we feel we go beyond the expectations of our valued customers.</p>
	</div>
	<div class="col-sm-3">
		<a href="{{url('/')}}/contact" class="btn btn-block btn-lg btn-red">Contact Us <span class="glyphicon glyphicon-menu-right"></span></a>
		<a href="#" class="btn btn-block btn-lg btn-black">Make a Payment <span class="glyphicon glyphicon-menu-right"></span></a>
	</div>
</div>

<div class="index-bottom">
<h2>Company Officers</h2>
<p>Steve Alchin - President</p>
<p>Kelly Alchin-Young - Vice-President</p>
<p>Kathryn Alchin-Loffreda - Secretary/Treasurer</p>

<p><img src="{{url('/')}}/img/visa-icon.gif" width="78" height="50" alt="VISA" /> <img src="{{url('/')}}/img/discover-icon.gif" width="78" height="50" alt="Discover" /> <img src="{{url('/')}}/img/mastercard-icon.gif" width="80" height="50" alt="MasterCard" /></p>
<p><span>We accept these major credit cards.</span></p>
</div>

@stop