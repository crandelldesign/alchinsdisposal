@if(!isset($active_page))
<?php $active_page = ''; ?>
@endif
<header class="header">
<div class="container-fluid">

	<div class="row">
		<div class="col-xs-12 col-sm-6 col-sm-push-3">
			<a href="{{url('/')}}"><img alt="Alchin's Disposal" class="header-img img-responsive" src="{{url('/')}}/img/alchins-disposal-logo.svg" width="478" height="150"></a>
		</div>
		<div class="col-sm-3 col-sm-pull-6 text-center hidden-xs">
			<div class="address">
				<span>Fowlerville</span>, <span>MI</span>
			</div>
		</div>
		<div class="col-sm-3 text-center hidden-xs">
			<a href="tel:1-517-223-7119" class="phone-link btn btn-white btn-lg"><span class="glyphicon glyphicon-earphone"></span> 517.223.7119</a>
		</div>
	</div>
</div>
	<nav class="navbar navbar-default">
		<div class="container-fluid">
				<div class="navbar-header">
					<div class="navbar-brand visible-xs-block">
						<a href="tel:1-517-223-7119" class="phone-link btn btn-white"><span class="glyphicon glyphicon-earphone"></span> 517.223.7119</a>
					</div>
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-menu"  aria-expanded="false">
			      		<div class="pull-left">Menu</div>
			      		<div class="pull-right">
					        <span class="sr-only">Toggle navigation</span>
					        <span class="icon-bar"></span>
					        <span class="icon-bar"></span>
					        <span class="icon-bar"></span>
				        </div>
			      	</button>
				</div>
				    <div class="collapse navbar-collapse" id="main-menu">
					    <ul id="menu-menu" class="nav navbar-nav">
					    	<li class="{{$active_page=='home'?'active':''}}"><a href="{{url('/')}}">Home</a></li><!--
					    	--><li class="{{$active_page=='residential'?'active':''}}"><a href="{{url('/')}}/residential">Residential</a></li><!--
					    	--><li class="{{$active_page=='commercial'?'active':''}}"><a href="{{url('/')}}/commercial">Commercial</a></li><!--
					    	--><li class="{{$active_page=='dumpster-roll-off-services'?'active':''}}"><a href="{{url('/')}}/dumpster-roll-off">Dumpster/Roll-Off Services</a></li><!--
					    	--><li class="{{$active_page=='recycling'?'active':''}}"><a href="{{url('/')}}/recycling">Recycle Center</a></li><!--
					    	--><li class="{{$active_page=='dump-center'?'active':''}}"><a href="{{url('/')}}/dump-center">Dump Center</a></li><!--
					    	--><li class="{{$active_page=='holidays'?'active':''}}"><a href="{{url('/')}}/holidays">Holidays</a></li><!--
					    	--><li class="{{$active_page=='testimonials'?'active':''}}"><a href="{{url('/')}}/testimonials">Testimonials</a></li><!--
					    	--><li class="{{$active_page=='payment'?'active':''}}"><a href="{{url('/')}}/payment">Make Payments</a></li><!--
					    	--><li class="{{$active_page=='contact'?'active':''}}"><a href="{{url('/')}}/contact">Contact Us</a></li>
						</ul>
					</div><!-- /.navbar-collapse -->
			</nav>
	</div>
</header>
