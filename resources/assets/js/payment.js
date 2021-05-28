import Vue from 'vue';
import plugin from 'vue-braintree';
import axios from 'axios';
 
Vue.use(plugin)

new Vue({
  el: '#payment-form-container',
  data () {
    return {
      instance: null,
      amount: null,
      accountNumber: ''
    }
  },
  mounted() {
    this.createPaymentForm();
  },
  methods: {
    createPaymentForm() {
      // let form = document.querySelector('#payment-form');
      let client_token = this.$el.getAttribute('data-clientId');
      braintree.dropin.create({
        authorization: client_token,
        selector: '#bt-dropin',
        paypal: {
          flow: 'vault'
        }
      }, (createErr, instance) => {
        if (createErr) {
          console.log('Create Error', createErr);
          return;
        }
        // console.log(instance);
        this.instance = instance;
        /*form.addEventListener('submit', function (event) {
          event.preventDefault();

          instance.requestPaymentMethod(function (err, payload) {
            if (err) {
              console.log('Request Payment Method Error', err);
              return;
            }

            // Add the nonce to the form and submit
            document.querySelector('#nonce').value = payload.nonce;
            form.submit();
          });
        });*/ 
      });
    },
    submitForm() {
      // console.log(this.instance);
      console.log(this.acountNumber);
      console.log(this.amount);
      this.instance.requestPaymentMethod( (err, payload) => {
        if (err) {
          console.log('Request Payment Method Error', err);
          return;
        }

        // Add the nonce to the form and submit
        // console.log(payload.nonce);
        // document.querySelector('#nonce').value = payload.nonce;
        // form.submit();
        let postData = {
          accountNumber: this.accountNumber,
          amount: this.amount,
          nonce: payload.nonce
        };
        // console.log(postData)
        axios.post('/api/payment', postData).then( (response) => {
          console.log(response.data);
        });
      });
    },
    onLoad (instance) {
      this.instance = instance;
    },
    onLoadFail (instance) {
      alert('load fail');
    },
    onSuccess (payload) {
      console.log("Success!", payload.nonce);
    },
    onError (error) {
      console.log("Error!", error);
    },
    clearPaymentSelection () {
      if (this.instance != null) {
        this.instance.clearSelectedPaymentMethod();
      }
    }
  }
});