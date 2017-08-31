@extends('layouts.default')
@section('content')

<h1>Welcome to Alchin's Disposal</h1>

<div class="row">
	<div class="col-sm-4 margin-bottom-20">
		<img class="img-responsive featured-img" src="{{url('/')}}/img/home-img{{rand(1,8)}}.jpg" alt="Alchin's Disposal, Inc.">
	</div>
	<div class="col-sm-5 margin-bottom-20">

		<p>Alchin's Disposal has been family owned since 1986, and is the only refuse removal company in Livingston County who can say this. Why give your money to a huge corporation when you can keep it local? Alchin’s strives on excellent customer service and can honestly say we stand behind our reputation of being the best refuse removal company in the Livingston County area.</p>
	</div>
	<div class="col-sm-3">
		<a href="{{url('/')}}/contact" class="btn btn-block btn-lg btn-green">Contact Us <i class="fa fa-angle-right" aria-hidden="true"></i></a>
		<a href="{{url('/')}}/payment" class="btn btn-block btn-lg btn-black">Make a Payment <i class="fa fa-angle-right" aria-hidden="true"></i></a>
		<a href="https://www.facebook.com/ALCHINS-DISPOSAL-INC-280829647628/" target="_blank" class="btn btn-block btn-lg btn-fa-blue">Like us on Facebook <i class="fa fa-facebook-square" aria-hidden="true"></i></a>
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
