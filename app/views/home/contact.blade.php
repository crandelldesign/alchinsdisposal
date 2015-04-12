@extends('home.templates.master')
@section('body')

<h1>Contact Us</h1>

<div class="row">
	<div class="col-sm-6">
		<div itemscope itemtype="http://schema.org/Organization">
			<div itemscope itemtype="http://schema.org/Restaurant">
				<p class="alchin-red"><strong itemprop="name">Alchin's Disposal, Inc.</strong></p>

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
		<iframe width="470" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=alchin's&amp;aq=&amp;sll=42.663685,-84.110202&amp;sspn=0.005073,0.009645&amp;vpsrc=6&amp;gl=us&amp;g=9900+W.+Grand+River+PO.+Box+950+Fowlerville,+MI+48836&amp;ie=UTF8&amp;t=m&amp;cid=540654102314289719&amp;hq=alchin's&amp;hnear=&amp;ll=42.673033,-84.113045&amp;spn=0.022087,0.04034&amp;z=14&amp;iwloc=A&amp;output=embed"></iframe><br /><small><a href="http://maps.google.com/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=alchin's&amp;aq=&amp;sll=42.663685,-84.110202&amp;sspn=0.005073,0.009645&amp;vpsrc=6&amp;gl=us&amp;g=9900+W.+Grand+River+PO.+Box+950+Fowlerville,+MI+48836&amp;ie=UTF8&amp;t=m&amp;cid=540654102314289719&amp;hq=alchin's&amp;hnear=&amp;ll=42.673033,-84.113045&amp;spn=0.022087,0.04034&amp;z=14&amp;iwloc=A">View Larger Map</a></small>
	</div>
</div>

@stop