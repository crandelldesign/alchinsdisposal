@if(!isset($active_page))
<?php $active_page = ''; ?>
@endif
<header class="header">
	<div class="container-fluid">
		<a href="{{url('/')}}"><img alt="Alchin's Disposal" class="header-img img-responsive" src="{{url('/')}}/img/alchins-disposal-logo.png"></a>
		<a href="#" class="phone-link"><span class="glyphicon glyphicon-earphone"></span> 517.223.7119</a>
	</div>
	<nav class="navbar navbar-default">
	  	<div class="container-fluid">
		    <!-- Brand and toggle get grouped for better mobile display -->
		    <div class="navbar-header">
		      	<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
		      		<div class="pull-left">Menu</div>
		      		<div class="pull-right">
				        <span class="sr-only">Toggle navigation</span>
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
			        </div>
		      	</button>
		      	<a class="navbar-brand" href="{{url('/')}}">Vicksburg Family Dentistry</a>
		    </div>

		    <!-- Collect the nav links, forms, and other content for toggling -->
		    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			    <ul id="menu-menu" class="nav navbar-nav">
			    	<li><a href="#">Residential</a></li>
			    	<li><a href="#">Commercial</a></li>
			    	<li><a href="#">Clean-Up/Dumpsters</a></li>
			    	<li><a href="#">Recycle/Dump Center</a></li>
			    	<li><a href="#">Holidays</a></li>
			    	<li><a href="#">Testimonials</a></li>
			    	<li><a href="#">Make Payments</a></li>
			    	<li class="{{$active_page=='contact'?'active':''}}"><a href="{{url('/')}}/contact">Contact Us</a></li>
				</ul>				
			</div><!-- /.navbar-collapse -->
		</div><!-- /.container-fluid -->
	</nav>
</header>
<div class="page container-fluid">