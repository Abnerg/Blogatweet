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
 * Get Account Balance  Sample
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
 * sample for Get Account Balance Action
 ***********************************************************************/
 // @TODO: set request. Action can be passed as Amazon_FPS_Model_GetAccountBalanceRequest
 // object or array of parameters
 // invokeGetAccountBalance($service, $request);

                                        
/**
  * Get Account Balance Action Sample
  * 
  * Returns the account balance for an account in real time.
  *   
  * @param Amazon_FPS_Interface $service instance of Amazon_FPS_Interface
  * @param mixed $request Amazon_FPS_Model_GetAccountBalance or array of parameters
  */
  function invokeGetAccountBalance(Amazon_FPS_Interface $service, $request) 
  {
      try {
              $response = $service->getAccountBalance($request);
              
                echo ("Service Response\n");
                echo ("=============================================================================\n");

                echo("        GetAccountBalanceResponse\n");
                if ($response->isSetGetAccountBalanceResult()) { 
                    echo("            GetAccountBalanceResult\n");
                    $getAccountBalanceResult = $response->getGetAccountBalanceResult();
                    if ($getAccountBalanceResult->isSetAccountBalance()) { 
                        echo("                AccountBalance\n");
                        $accountBalance = $getAccountBalanceResult->getAccountBalance();
                        if ($accountBalance->isSetTotalBalance()) { 
                            echo("                    TotalBalance\n");
                            $totalBalance = $accountBalance->getTotalBalance();
                            if ($totalBalance->isSetCurrencyCode()) 
                            {
                                echo("                        CurrencyCode\n");
                                echo("                            " . $totalBalance->getCurrencyCode() . "\n");
                            }
                            if ($totalBalance->isSetValue()) 
                            {
                                echo("                        Value\n");
                                echo("                            " . $totalBalance->getValue() . "\n");
                            }
                        } 
                        if ($accountBalance->isSetPendingInBalance()) { 
                            echo("                    PendingInBalance\n");
                            $pendingInBalance = $accountBalance->getPendingInBalance();
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
                        if ($accountBalance->isSetPendingOutBalance()) { 
                            echo("                    PendingOutBalance\n");
                            $pendingOutBalance = $accountBalance->getPendingOutBalance();
                            if ($pendingOutBalance->isSetCurrencyCode()) 
                            {
                                echo("                        CurrencyCode\n");
                                echo("                            " . $pendingOutBalance->getCurrencyCode() . "\n");
                            }
                            if ($pendingOutBalance->isSetValue()) 
                            {
                                echo("                        Value\n");
                                echo("                            " . $pendingOutBalance->getValue() . "\n");
                            }
                        } 
                        if ($accountBalance->isSetAvailableBalances()) { 
                            echo("                    AvailableBalances\n");
                            $availableBalances = $accountBalance->getAvailableBalances();
                            if ($availableBalances->isSetDisburseBalance()) { 
                                echo("                        DisburseBalance\n");
                                $disburseBalance = $availableBalances->getDisburseBalance();
                                if ($disburseBalance->isSetCurrencyCode()) 
                                {
                                    echo("                            CurrencyCode\n");
                                    echo("                                " . $disburseBalance->getCurrencyCode() . "\n");
                                }
                                if ($disburseBalance->isSetValue()) 
                                {
                                    echo("                            Value\n");
                                    echo("                                " . $disburseBalance->getValue() . "\n");
                                }
                            } 
                            if ($availableBalances->isSetRefundBalance()) { 
                                echo("                        RefundBalance\n");
                                $refundBalance = $availableBalances->getRefundBalance();
                                if ($refundBalance->isSetCurrencyCode()) 
                                {
                                    echo("                            CurrencyCode\n");
                                    echo("                                " . $refundBalance->getCurrencyCode() . "\n");
                                }
                                if ($refundBalance->isSetValue()) 
                                {
                                    echo("                            Value\n");
                                    echo("                                " . $refundBalance->getValue() . "\n");
                                }
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
                                                                                