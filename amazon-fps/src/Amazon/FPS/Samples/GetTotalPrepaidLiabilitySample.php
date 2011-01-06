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
 * Get Total Prepaid Liability  Sample
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
 * sample for Get Total Prepaid Liability Action
 ***********************************************************************/
 // @TODO: set request. Action can be passed as Amazon_FPS_Model_GetTotalPrepaidLiabilityRequest
 // object or array of parameters
 // invokeGetTotalPrepaidLiability($service, $request);

                                                                        
/**
  * Get Total Prepaid Liability Action Sample
  * 
  * Returns the total liability held by the given account corresponding to all the prepaid instruments owned by the account.
  *   
  * @param Amazon_FPS_Interface $service instance of Amazon_FPS_Interface
  * @param mixed $request Amazon_FPS_Model_GetTotalPrepaidLiability or array of parameters
  */
  function invokeGetTotalPrepaidLiability(Amazon_FPS_Interface $service, $request) 
  {
      try {
              $response = $service->getTotalPrepaidLiability($request);
              
                echo ("Service Response\n");
                echo ("=============================================================================\n");

                echo("        GetTotalPrepaidLiabilityResponse\n");
                if ($response->isSetGetTotalPrepaidLiabilityResult()) { 
                    echo("            GetTotalPrepaidLiabilityResult\n");
                    $getTotalPrepaidLiabilityResult = $response->getGetTotalPrepaidLiabilityResult();
                    if ($getTotalPrepaidLiabilityResult->isSetOutstandingPrepaidLiability()) { 
                        echo("                OutstandingPrepaidLiability\n");
                        $outstandingPrepaidLiability = $getTotalPrepaidLiabilityResult->getOutstandingPrepaidLiability();
                        if ($outstandingPrepaidLiability->isSetOutstandingBalance()) { 
                            echo("                    OutstandingBalance\n");
                            $outstandingBalance = $outstandingPrepaidLiability->getOutstandingBalance();
                            if ($outstandingBalance->isSetCurrencyCode()) 
                            {
                                echo("                        CurrencyCode\n");
                                echo("                            " . $outstandingBalance->getCurrencyCode() . "\n");
                            }
                            if ($outstandingBalance->isSetValue()) 
                            {
                                echo("                        Value\n");
                                echo("                            " . $outstandingBalance->getValue() . "\n");
                            }
                        } 
                        if ($outstandingPrepaidLiability->isSetPendingInBalance()) { 
                            echo("                    PendingInBalance\n");
                            $pendingInBalance = $outstandingPrepaidLiability->getPendingInBalance();
                            if ($pendingInBalance->isSetCurrencyCode()) 
                            {
                                echo("                        CurrencyCode\n");
                                echo("                            " . $pendingInBalance->getCurrencyCode() . "\n");
                            }
                            if ($pendingInBalance->isSetValue()) 
                            {
                                echo("                        Value\n");
                                echo("                            " . $pendingInBalance->getValue() . "\n");
                            }
                        } 
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
                                                