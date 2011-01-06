<?php
/** 
 *  PHP Version 5
 *
 *  @category    Amazon
 *  @package     Amazon_FPS
 *  @copyright   Copyright 2008 Amazon Technologies, Inc.
 *  @link        http://aws.amazon.com
 *  @license     http://aws.amazon.com/apache2.0  Apache License, Version 2.0
 *  @version     2008-09-17
 */
/******************************************************************************* 
 *    __  _    _  ___ 
 *   (  )( \/\/ )/ __)
 *   /__\ \    / \__ \
 *  (_)(_) \/\/  (___/
 * 
 *  Amazon FPS PHP5 Library
 *  Generated: Wed Sep 23 03:35:04 PDT 2009
 * 
 */

/**
 * Pay  Sample
 */

include_once ('.config.inc.php'); 

/************************************************************************
 * Instantiate Implementation of Amazon FPS
 * 
 * AWS_ACCESS_KEY_ID and AWS_SECRET_ACCESS_KEY constants 
 * are defined in the .config.inc.php located in the same 
 * directory as this sample
 ***********************************************************************/
 $service = new Amazon_FPS_Client(AWS_ACCESS_KEY_ID, 
                                       AWS_SECRET_ACCESS_KEY);
 
/************************************************************************
 * Uncomment to try out Mock Service that simulates Amazon_FPS
 * responses without calling Amazon_FPS service.
 *
 * Responses are loaded from local XML files. You can tweak XML files to
 * experiment with various outputs during development
 *
 * XML files available under Amazon/FPS/Mock tree
 *
 ***********************************************************************/
 // $service = new Amazon_FPS_Mock();

/************************************************************************
 * Setup request parameters and uncomment invoke to try out 
 * sample for Pay Action
 ***********************************************************************/
 // @TODO: set request. Action can be passed as Amazon_FPS_Model_PayRequest
 // object or array of parameters
 // invokePay($service, $request);
$request =  new Amazon_FPS_Model_PayRequest();
$request->setSenderTokenId('F4DMQ47HJ4HSQAXM9B1E31SZGPNKXUV66DU3LJJP1MMSS84QRFEXJN1XUFKDQZC1');//set the proper senderToken here.
$amount = new Amazon_FPS_Model_Amount();
$amount->setCurrencyCode("USD");
$amount->setValue('1'); //set the transaction amount here;
//$request->setTransactionAmount($amount);
$request->setCallerReference('CallerReference123456789'); //set the unique caller reference here.

$service = new Amazon_FPS_Client(
   AWS_ACCESS_KEY_ID, 
   AWS_SECRET_ACCESS_KEY);

// make the pay call
invokePay($service, $request);

                                                                                            
/**
  * Pay Action Sample
  * 
  * Allows calling applications to move money from a sender to a recipient.
  *   
  * @param Amazon_FPS_Interface $service instance of Amazon_FPS_Interface
  * @param mixed $request Amazon_FPS_Model_Pay or array of parameters
  */
  function invokePay(Amazon_FPS_Interface $service, $request) 
  {
      try {
              $response = $service->pay($request);
              
                echo ("Service Response\n");
                echo ("=============================================================================\n");

                echo("        PayResponse\n");
                if ($response->isSetPayResult()) { 
                    echo("            PayResult\n");
                    $payResult = $response->getPayResult();
                    if ($payResult->isSetTransactionId()) 
                    {
                        echo("                TransactionId\n");
                        echo("                    " . $payResult->getTransactionId() . "\n");
                    }
                    if ($payResult->isSetTransactionStatus()) 
                    {
                        echo("                TransactionStatus\n");
                        echo("                    " . $payResult->getTransactionStatus() . "\n");
                    }
                } 
                if ($response->isSetResponseMetadata()) { 
                    echo("            ResponseMetadata\n");
                    $responseMetadata = $response->getResponseMetadata();
                    if ($responseMetadata->isSetRequestId()) 
                    {
                        echo("                RequestId\n");
                        echo("                    " . $responseMetadata->getRequestId() . "\n");
                    }
                } 

     } catch (Amazon_FPS_Exception $ex) {
         echo("Caught Exception: " . $ex->getMessage() . "\n");
         echo("Response Status Code: " . $ex->getStatusCode() . "\n");
         echo("Error Code: " . $ex->getErrorCode() . "\n");
         echo("Error Type: " . $ex->getErrorType() . "\n");
         echo("Request ID: " . $ex->getRequestId() . "\n");
         echo("XML: " . $ex->getXML() . "\n");
     }
 }
                            