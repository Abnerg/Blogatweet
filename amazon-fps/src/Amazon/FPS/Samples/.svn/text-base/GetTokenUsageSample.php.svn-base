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
 * Get Token Usage  Sample
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
 * sample for Get Token Usage Action
 ***********************************************************************/
 // @TODO: set request. Action can be passed as Amazon_FPS_Model_GetTokenUsageRequest
 // object or array of parameters
 // invokeGetTokenUsage($service, $request);

                                                                
/**
  * Get Token Usage Action Sample
  * 
  * Returns the usage of a token.
  *   
  * @param Amazon_FPS_Interface $service instance of Amazon_FPS_Interface
  * @param mixed $request Amazon_FPS_Model_GetTokenUsage or array of parameters
  */
  function invokeGetTokenUsage(Amazon_FPS_Interface $service, $request) 
  {
      try {
              $response = $service->getTokenUsage($request);
              
                echo ("Service Response\n");
                echo ("=============================================================================\n");

                echo("        GetTokenUsageResponse\n");
                if ($response->isSetGetTokenUsageResult()) { 
                    echo("            GetTokenUsageResult\n");
                    $getTokenUsageResult = $response->getGetTokenUsageResult();
                    $tokenUsageLimitsList = $getTokenUsageResult->getTokenUsageLimits();
                    foreach ($tokenUsageLimitsList as $tokenUsageLimits) {
                        echo("                TokenUsageLimits\n");
                        if ($tokenUsageLimits->isSetCount()) 
                        {
                            echo("                    Count\n");
                            echo("                        " . $tokenUsageLimits->getCount() . "\n");
                        }
                        if ($tokenUsageLimits->isSetAmount()) { 
                            echo("                    Amount\n");
                            $amount = $tokenUsageLimits->getAmount();
                            if ($amount->isSetCurrencyCode()) 
                            {
                                echo("                        CurrencyCode\n");
                                echo("                            " . $amount->getCurrencyCode() . "\n");
                            }
                            if ($amount->isSetValue()) 
                            {
                                echo("                        Value\n");
                                echo("                            " . $amount->getValue() . "\n");
                            }
                        } 
                        if ($tokenUsageLimits->isSetLastResetCount()) 
                        {
                            echo("                    LastResetCount\n");
                            echo("                        " . $tokenUsageLimits->getLastResetCount() . "\n");
                        }
                        if ($tokenUsageLimits->isSetLastResetAmount()) { 
                            echo("                    LastResetAmount\n");
                            $lastResetAmount = $tokenUsageLimits->getLastResetAmount();
                            if ($lastResetAmount->isSetCurrencyCode()) 
                            {
                                echo("                        CurrencyCode\n");
                                echo("                            " . $lastResetAmount->getCurrencyCode() . "\n");
                            }
                            if ($lastResetAmount->isSetValue()) 
                            {
                                echo("                        Value\n");
                                echo("                            " . $lastResetAmount->getValue() . "\n");
                            }
                        } 
                        if ($tokenUsageLimits->isSetLastResetTimestamp()) 
                        {
                            echo("                    LastResetTimestamp\n");
                            echo("                        " . $tokenUsageLimits->getLastResetTimestamp() . "\n");
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
                                                        