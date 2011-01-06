<?php

session_start();
require_once('../util.php');
require_once('../dbconnection.php');
require_once('.config.inc.php');

if(!Util::validUser()) {
   header('Location: index.php');
}

if(empty($_GET['tokenID'])) {
   echo 'Error <br />';
   print_r($_GET);
   return false;
}

$token_id = $_GET['tokenID'];

$conn = new DBConnection;
$donation = $conn->getDonationById($_SESSION['donation_id']);
$donation->token_id = $token_id;

// see FPS/Samples/PaySample.php or read README.HTML in Amazon root
$service = new Amazon_FPS_Client(AWS_ACCESS_KEY_ID, AWS_SECRET_ACCESS_KEY);
$request =  new Amazon_FPS_Model_PayRequest();
$request->setSenderTokenId($token_id);//set the proper senderToken here.
$amount = new Amazon_FPS_Model_Amount();
$amount->setCurrencyCode("USD");
$amount->setValue($donation->amount); //set the transaction amount here;
$request->setTransactionAmount($amount);
$request->setCallerReference($donation->caller_reference); //set the unique caller reference here.

try {
   $response = $service->pay($request);
   if ($response->isSetPayResult()) { 
      $payResult = $response->getPayResult();
      if ($payResult->isSetTransactionId()) {
         $donation->transaction_id = $payResult->getTransactionId();
      }
      if ($payResult->isSetTransactionStatus()) {
         $donation->transaction_status = $payResult->getTransactionStatus();
      }
   } 
   if ($response->isSetResponseMetadata()) { 
      $responseMetadata = $response->getResponseMetadata();
      if ($responseMetadata->isSetRequestId()) {
         $donation->request_id = $responseMetadata->getRequestId();
      }
   }
   
   $conn->saveDonation($donation);
   unset($_SESSION['donation_id']);
   $user = $conn->getUserById($donation->user_id);
   $user->is_beta = 1;
   $conn->saveUser($user);
   
   header('Location: ../collections.php');

} catch (Amazon_FPS_Exception $ex) {
   echo("Caught Exception: " . $ex->getMessage() . "\n");
   echo("Response Status Code: " . $ex->getStatusCode() . "\n");
   echo("Error Code: " . $ex->getErrorCode() . "\n");
   echo("Error Type: " . $ex->getErrorType() . "\n");
   echo("Request ID: " . $ex->getRequestId() . "\n");
   echo("XML: " . $ex->getXML() . "\n");
}

?>
