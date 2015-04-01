@extends('home.templates.master')
@section('body')

<h1>Make a Payment</h1>

<p>Please type in your account number which is located in the upper right hand corner of your statement then click the Buy Now button. This will take you to PayPal where you can either log into your PayPal account, if you have one, or use a VISA, MasterCard or Discover credit/debit card, or pay with a check, using your checking account information. You must input the amount you would like to pay on your account and then click the &quot;update&quot; button.</p>

<form class="form payment-form" action="https://www.paypal.com/cgi-bin/webscr" method="post">
	<input type="hidden" name="cmd" value="_s-xclick">
	<input type="hidden" name="hosted_button_id" value="2803076">
	<div class="form-group">
		<input type="hidden" name="on0" value="Trash Pickup"><label>Trash Pickup</label>
	</div>
	<div class="form-group">
		<select class="form-control" name="os0">
			<option value="Pay My Bill">Pay My Bill</option>
		</select>
	</div>
	<div class="form-group">
		<input type="hidden" name="on1" value="Account Number"><label>Account Number</label>
		<input class="form-control" type="text" name="os1" maxlength="60">
	</div>
	<input type="image" src="https://www.paypal.com/en_US/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="">
	<img alt="" border="0" src="https://www.paypal.com/en_US/i/scr/pixel.gif" width="1" height="1">
</form>

@stop