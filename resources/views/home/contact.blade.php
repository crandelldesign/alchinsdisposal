@extends('layouts.default')
@section('content')

<h1>Contact Us</h1>

<div class="row">
	<div class="col-sm-6">
		<div itemscope itemtype="http://schema.org/Organization">
			<div itemscope itemtype="http://schema.org/Restaurant">
				<p class="alchin-green-light"><strong itemprop="name">Alchin's Disposal, Inc.</strong></p>

				<address itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
					<span itemprop="streetAddress">9900 W. Grand River<br />
					P.O. Box 950</span><br />
					<span itemprop="addressLocality">Fowlerville</span>, <span itemprop="addressRegion">MI</span> <span itemprop="postalCode">48836</span>
				</address>

				<p><a href="tel:1-517-223-7119" itemprop="telephone" class="phone">(517) 223-7119 (office)</a><br />
				(517) 223-4103 (fax)<br />
				Email: <a href="mailto:alchinsdisposal@sbcglobal.net" itemprop="email">alchinsdisposal@sbcglobal.net</a></p>

				<p><meta itemprop="openingHours" content="Mo-Fr 8:00-17:00">Our office hours are: 8:00a.m.- 5:00p.m., Monday - Friday</p>

				<p>Our office is closed 12:00p.m. – 1:00p.m. for lunch, Monday – Friday.</p>
			</div>
		</div>

		<p>We strongly encourage our customers to contact us with comments and feedback.
		We are always looking for ways to improve our customer service, as well as our
		service on the daily routes. It is our customers who have made us who we are
		today, and we sincerely thank you for that. (Please let us know if it is acceptable to
		you to post your comments on our website.)</p>

	</div>

	<div class="col-sm-6">

		<form id="contact-form" class="form" action="{{url('/contact')}}#contact-form" method="post" autocomplete="off">
            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif
            @if (count($errors) > 0)
                <div class="alert alert-danger">Please correct the errors in red below.</div>
                @foreach ($errors->get('honeyName') as $error)
                    <div class="alert alert-danger">{{ $error }}</div>
                @endforeach
            @endif
            <div class="form-group form-group-sm {{($errors->has('name'))?'has-error':''}}">
                <label class="control-label" for="name">Name</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Name" value="{{old('name')}}">
                @foreach ($errors->get('name') as $error)
                    <div class="help-block with-errors">{{ $error }}</div>
                @endforeach
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group form-group-sm {{($errors->has('email'))?'has-error':''}}">
                        <label class="control-label" for="email">Email</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Email" value="{{old('email')}}">
                        @foreach ($errors->get('email') as $error)
                            <div class="help-block with-errors">{{ $error }}</div>
                        @endforeach
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group form-group-sm {{($errors->has('phone'))?'has-error':''}}">
                        <label class="control-label" for="phone">Phone</label>
                        <input type="text" class="form-control" id="phone" name="phone" placeholder="Phone" value="{{old('phone')}}">
                        @foreach ($errors->get('phone') as $error)
                            <div class="help-block with-errors">{{ $error }}</div>
                        @endforeach
                    </div>
                </div>
            </div>

            <div class="form-group form-group-sm {{($errors->has('message'))?'has-error':''}}">
                <label class="control-label" for="message">Message</label>
                <textarea class="form-control" rows="5" id="message" name="message" placeholder="Message">{{old('message')}}</textarea>
                @foreach ($errors->get('message') as $error)
                    <div class="help-block with-errors">{{ $error }}</div>
                @endforeach
            </div>
            <!-- <?php /* <div class="form-group form-group-sm {{(count($errors) > 0 && $errors->first('g-recaptcha-response'))?'has-error':''}}">
                <div class="g-recaptcha" data-sitekey="{{ env('RECAPTCHA_SITEKEY') }}"></div>
                @foreach ($errors->get('g-recaptcha-response') as $error)
                    <div class="help-block with-errors">{{ $error }}</div>
                @endforeach
                @foreach ($errors->get('recaptcha') as $error)
                    <div class="help-block with-errors">{{ $error }}</div>
                @endforeach
            </div> */ ?> -->
            <p class="help-block alchin-red">Scheduling extra/large items or starting or canceling service cannot be emailed to Alchin's at any time.</p>
            <input type="text" name="honeyName" style="display: none">
            {{ csrf_field() }}
            <div class="form-group form-group-submit">
                <button type="submit" class="btn btn-submit btn-green">Send</button>
            </div>
        </form>
	</div>
</div>

@stop

@section('map')
	<div id="map"></div>
@stop

@section('scripts')
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCeIBiIKGbWrvKjSeJswXz2ZmmzPDK-Vow&libraries=places&callback=initMap"></script>
<script>
	function initMap() {
	    var location = {lat: 42.664084, lng: -84.110577};
	    var map = new google.maps.Map(document.getElementById('map'), {
	        zoom: 13,
	        center: location,
	        scrollwheel: false,
	        });
	    var infowindow = new google.maps.InfoWindow();
	    var service = new google.maps.places.PlacesService(map);

	    service.getDetails({
	      placeId: 'ChIJfz6nHzAjI4gRNwrNogrKgAc'
	    }, function(place, status) {
	      if (status === google.maps.places.PlacesServiceStatus.OK) {
	        var marker = new google.maps.Marker({
	          map: map,
	          position: place.geometry.location
	        });
	        google.maps.event.addListener(marker, 'click', function() {
	            infowindow.setContent('<div><strong>' + place.name + '</strong><br>' +
	            place.formatted_address + '<br>'+
	            '<a href="'+place.url+'" target="_blank">View on Google Maps</a>'+'</div>');
	            infowindow.open(map, this);
	        });
	      }
	    });
	}
</script>
@stop
