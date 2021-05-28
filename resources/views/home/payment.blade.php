@extends('layouts.default')
@section('content')

<h1>Make a Payment</h1>

<p>Please type in your account number which is located in the upper right hand corner of your statement then click the Buy Now button. This will take you to PayPal where you can either log into your PayPal account, if you have one, or use a VISA, MasterCard or Discover credit/debit card, or pay with a check, using your checking account information.</p>
<p><strong class="text-uppercase">You must input the amount you would like to pay on your account and then click the &quot;continue&quot; button.</strong></p>
<p><strong class="text-uppercase">Payments received after 5pm on delinquent accounts does not guarantee pick up the next day. Credit for no pick up will not be issued on delinquent accounts after payment is received.</strong></p>

<div id="payment-form-container" data-clientId="{!! $client_id !!}">

  <form method="post" id="payment-form" v-on:submit.prevent="submitForm()">
    <section>
      <div class="form-group">
        <label for="account-number">Account Number</label>
        <input class="form-control" type="text" name="account_number" id="account-number" maxlength="127" value="" v-model="accountNumber">
      </div>
      <div class="form-group">
        <label for="amount">Amount</label>
        <input class="form-control" type="tel" name="amount" id="amount" min="1" value="" v-model="amount">
      </div>
      <div class="form-group">
        <div class="bt-drop-in-wrapper">
          <div id="bt-dropin"></div>
        </div>
      </div>
    </section>

    <input id="nonce" name="payment_method_nonce" type="hidden" />
    <button class="btn btn-primary" type="submit">Pay</button>
  </form>

  <!-- <v-braintree 
      authorization="{{ $client_id }}"
      :paypal="{flow: 'vault'}"
      @load="onLoad"
      @loadFail="onLoadFail"
      @success="onSuccess"
      @error="onError"
    >
      <template v-slot:button="slotProps">
        <input type="submit" @click="slotProps.submit" class="btn btn-warning" value="Pay now!!" />
      </template>
    </v-braintree>-->
</div>

<div id="smart-button-container">

  <div>
    <label for="description">Account Number </label>
    <input class="form-control" type="text" name="descriptionInput" id="description" maxlength="127" value="">
  </div>
  <p id="descriptionError" style="visibility: hidden; color:red;">Please enter a description</p>

  <div class="form-row-group">
    <label for="amount">$ </label>
    <input class="form-control" name="amountInput" type="number" id="amount" value="" >
    <span> USD</span>
  </div>
  <p id="priceLabelError" style="visibility: hidden; color:red;">Please enter a price</p>

  <div id="invoiceidDiv" style="text-align: center; display: none;"><label for="invoiceid"> </label><input name="invoiceid" maxlength="127" type="text" id="invoiceid" value="" ></div>

    <p id="invoiceidError" style="visibility: hidden; color:red; text-align: center;">Please enter an Invoice ID</p>

    <div style="text-align: center; margin-top: 0.625rem;" id="paypal-button-container"></div>

  </div>

  <script src="https://www.paypal.com/sdk/js?client-id=AdYIFaXgK8jKH1xVgzRjcU9qThBYRjC51k12D8xIc_78Cd7kzFuj2GSNYDxsDhxON1lPSn6IO1_KkDEd&currency=USD" data-sdk-integration-source="button-factory"></script>

  <script>

  function initPayPalButton() {

    var description = document.querySelector('#smart-button-container #description');
    var amount = document.querySelector('#smart-button-container #amount');
    var descriptionError = document.querySelector('#smart-button-container #descriptionError');
    var priceError = document.querySelector('#smart-button-container #priceLabelError');
    var invoiceid = document.querySelector('#smart-button-container #invoiceid');
    var invoiceidError = document.querySelector('#smart-button-container #invoiceidError');
    var invoiceidDiv = document.querySelector('#smart-button-container #invoiceidDiv');

    var elArr = [description, amount];
    if (invoiceidDiv.firstChild.innerHTML.length > 1) {
      invoiceidDiv.style.display = "block";
    }

    var purchase_units = [];
    purchase_units[0] = {};
    purchase_units[0].amount = {};

    function validate(event) {
      return event.value.length > 0;
    }

    paypal.Buttons({
      style: {
        color: 'blue',
        shape: 'rect',
        label: 'paypal',
        layout: 'vertical',
      },
      onInit: function (data, actions) {
        actions.disable();
        if(invoiceidDiv.style.display === "block") {
          elArr.push(invoiceid);
        }
        elArr.forEach(function (item) {
          item.addEventListener('keyup', function (event) {
            var result = elArr.every(validate);
            if (result) {
              actions.enable();
            } else {
              actions.disable();
            }
          });
        });
      },
      onClick: function () {
        if (description.value.length < 1) {
          descriptionError.style.visibility = "visible";
        } else {
          descriptionError.style.visibility = "hidden";
        }
        if (amount.value.length < 1) {
          priceError.style.visibility = "visible";
        } else {
          priceError.style.visibility = "hidden";
        }
        if (invoiceid.value.length < 1 && invoiceidDiv.style.display === "block") {
          invoiceidError.style.visibility = "visible";
        } else {
          invoiceidError.style.visibility = "hidden";
        }
        purchase_units[0].description = description.value;
        purchase_units[0].amount.value = amount.value;
        if (invoiceid.value !== '') {
          purchase_units[0].invoice_id = invoiceid.value;
        }
      },
      createOrder: function (data, actions) {
        return actions.order.create({
          purchase_units: purchase_units,
        });
      },
      onApprove: function (data, actions) {
        return actions.order.capture().then(function (details) {
          alert('Transaction completed by ' + details.payer.name.given_name + '!');
        });
      },
      onError: function (err) {
        console.log(err);
      }
    }).render('#paypal-button-container');
  }
  initPayPalButton();

</script>

<!-- <form class="form payment-form" action="https://www.paypal.com/cgi-bin/webscr" method="post">
	<input type="hidden" name="cmd" value="_s-xclick">
	<input type="hidden" name="hosted_button_id" value="2803076">
	<div class="form-group">
		<input type="hidden" name="on0" value="Trash Pickup"><label class="alchin-green">Trash Pickup</label>
	</div>
	<div class="form-group">
		<select class="form-control" name="os0">
			<option value="Pay My Bill">Pay My Bill</option>
		</select>
	</div>
	<div class="form-group">
		<input type="hidden" name="on1" value="Account Number"><label class="alchin-green">Account Number</label>
		<input class="form-control" type="text" name="os1" maxlength="60">
	</div>
	<input type="image" src="https://www.paypal.com/en_US/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="">
	<img alt="" border="0" src="https://www.paypal.com/en_US/i/scr/pixel.gif" width="1" height="1">
</form> -->

@stop

@section('scripts')
<script src="https://js.braintreegateway.com/web/dropin/1.27.0/js/dropin.min.js"></script>
<script type="text/javascript" src="{{ mix('/js/payment.js') }}"></script>
@stop