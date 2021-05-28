<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApiController extends Controller
{
  /**
   * Create a new controller instance.
   *
   * @return void
   */
  public function __construct()
  {
      //
  }

  public function payment(Request $request)
  {
    \Log::Debug($request->all());
    $gateway = new \Braintree\Gateway([
      'environment' => env('BT_ENVIRONMENT'),
      'merchantId' => env('BT_MERCHANT_ID'),
      'publicKey' => env('BT_PUBLIC_KEY'),
      'privateKey' => env('BT_PRIVATE_KEY'),
    ]);
    $result = $gateway->transaction()->sale([
      'amount' => $request->get('amount'),
      'customer' => [
        'id' => $request->get('accountNumber')
      ],
      'paymentMethodNonce' => $request->get('nonce'),
      'customFields' => [
        'account_number' => $request->get('accountNumber')
      ],
      'options' => [
        'submitForSettlement' => true
      ]
    ]);

    if ($result->success || !is_null($result->transaction)) {
      $resultTransaction = $result->transaction;
      // header("Location: " . $baseUrl . "transaction.php?id=" . $transaction->id);
      $transaction = $gateway->transaction()->find($resultTransaction->id);

      $transactionSuccessStatuses = [
          \Braintree\Transaction::AUTHORIZED,
          \Braintree\Transaction::AUTHORIZING,
          \Braintree\Transaction::SETTLED,
          \Braintree\Transaction::SETTLING,
          \Braintree\Transaction::SETTLEMENT_CONFIRMED,
          \Braintree\Transaction::SETTLEMENT_PENDING,
          \Braintree\Transaction::SUBMITTED_FOR_SETTLEMENT
      ];

      if (in_array($transaction->status, $transactionSuccessStatuses)) {
        return response()->json([
          'status' => 'success',
          'message' => 'Your test transaction has been successfully processed. See the Braintree API response and try again.'
        ]);
      } else {
        return response()->json([
          'status' => 'error',
          'message' => 'Your test transaction has a status of ' . $transaction->status . '. See the Braintree API response and try again.'
        ]);
      }
    } else {
      $errorString = "";
  
      foreach($result->errors->deepAll() as $error) {
          $errorString .= 'Error: ' . $error->code . ": " . $error->message . "\n";
      }
  
      \Log::Debug($errorString);
      //header("Location: " . $baseUrl . "index.php");

      return response()->json([
        'status' => 'error',
        'message' => $errorString
      ]);
    }

  }
}