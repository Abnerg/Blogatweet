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
 * Get Account Activity  Sample
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
 * sample for Get Account Activity Action
 ***********************************************************************/
 // @TODO: set request. Action can be passed as Amazon_FPS_Model_GetAccountActivityRequest
 // object or array of parameters
 // invokeGetAccountActivity($service, $request);

                                    
/**
  * Get Account Activity Action Sample
  * 
  * Returns transactions for a given date range.
  *   
  * @param Amazon_FPS_Interface $service instance of Amazon_FPS_Interface
  * @param mixed $request Amazon_FPS_Model_GetAccountActivity or array of parameters
  */
  function invokeGetAccountActivity(Amazon_FPS_Interface $service, $request) 
  {
      try {
              $response = $service->getAccountActivity($request);
              
                echo ("Service Response\n");
                echo ("=============================================================================\n");

                echo("        GetAccountActivityResponse\n");
                if ($response->isSetGetAccountActivityResult()) { 
                    echo("            GetAccountActivityResult\n");
                    $getAccountActivityResult = $response->getGetAccountActivityResult();
                    if ($getAccountActivityResult->isSetBatchSize()) 
                    {
                        echo("                BatchSize\n");
                        echo("                    " . $getAccountActivityResult->getBatchSize() . "\n");
                    }
                    $transactionList = $getAccountActivityResult->getTransaction();
                    foreach ($transactionList as $transaction) {
                        echo("                Transaction\n");
                        if ($transaction->isSetTransactionId()) 
                        {
                            echo("                    TransactionId\n");
                            echo("                        " . $transaction->getTransactionId() . "\n");
                        }
                        if ($transaction->isSetCallerTransactionDate()) 
                        {
                            echo("                    CallerTransactionDate\n");
                            echo("                        " . $transaction->getCallerTransactionDate() . "\n");
                        }
                        if ($transaction->isSetDateReceived()) 
                        {
                            echo("                    DateReceived\n");
                            echo("                        " . $transaction->getDateReceived() . "\n");
                        }
                        if ($transaction->isSetDateCompleted()) 
                        {
                            echo("                    DateCompleted\n");
                            echo("                        " . $transaction->getDateCompleted() . "\n");
                        }
                        if ($transaction->isSetTransactionAmount()) { 
                            echo("                    TransactionAmount\n");
                            $transactionAmount = $transaction->getTransactionAmount();
                            if ($transactionAmount->isSetCurrencyCode()) 
                            {
                                echo("                        CurrencyCode\n");
                                echo("                            " . $transactionAmount->getCurrencyCode() . "\n");
                            }
                            if ($transactionAmount->isSetValue()) 
                            {
                                echo("                        Value\n");
                                echo("                            " . $transactionAmount->getValue() . "\n");
                            }
                        } 
                        if ($transaction->isSetFPSOperation()) 
                        {
                            echo("                    FPSOperation\n");
                            echo("                        " . $transaction->getFPSOperation() . "\n");
                        }
                        if ($transaction->isSetTransactionStatus()) 
                        {
                            echo("                    TransactionStatus\n");
                            echo("                        " . $transaction->getTransactionStatus() . "\n");
                        }
                        if ($transaction->isSetStatusMessage()) 
                        {
                            echo("                    StatusMessage\n");
                            echo("                        " . $transaction->getStatusMessage() . "\n");
                        }
                        if ($transaction->isSetStatusCode()) 
                        {
                            echo("                    StatusCode\n");
                            echo("                        " . $transaction->getStatusCode() . "\n");
                        }
                        if ($transaction->isSetOriginalTransactionId()) 
                        {
                            echo("                    OriginalTransactionId\n");
                            echo("                        " . $transaction->getOriginalTransactionId() . "\n");
                        }
                        $transactionPartList = $transaction->getTransactionPart();
                        foreach ($transactionPartList as $transactionPart) {
                            echo("                    TransactionPart\n");
                            if ($transactionPart->isSetInstrumentId()) 
                            {
                                echo("                        InstrumentId\n");
                                echo("                            " . $transactionPart->getInstrumentId() . "\n");
                            }
                            if ($transactionPart->isSetRole()) 
                            {
                                echo("                        Role\n");
                                echo("                            " . $transactionPart->getRole() . "\n");
                            }
                            if ($transactionPart->isSetName()) 
                            {
                                echo("                        Name\n");
                                echo("                            " . $transactionPart->getName() . "\n");
                            }
                            if ($transactionPart->isSetReference()) 
                            {
                                echo("                        Reference\n");
                                echo("                            " . $transactionPart->getReference() . "\n");
                            }
                            if ($transactionPart->isSetDescription()) 
                            {
                                echo("                        Description\n");
                                echo("                            " . $transactionPart->getDescription() . "\n");
                            }
                            if ($transactionPart->isSetFeesPaid()) { 
                                echo("                        FeesPaid\n");
                                $feesPaid = $transactionPart->getFeesPaid();
                                if ($feesPaid->isSetCurrencyCode()) 
                                {
                                    echo("                            CurrencyCode\n");
                                    echo("                                " . $feesPaid->getCurrencyCode() . "\n");
                                }
                                if ($feesPaid->isSetValue()) 
                                {
                                    echo("                            Value\n");
                                    echo("                                " . $feesPaid->getValue() . "\n");
                                }
                            } 
                        }
                        if ($transaction->isSetPaymentMethod()) 
                        {
                            echo("                    PaymentMethod\n");
                            echo("                        " . $transaction->getPaymentMethod() . "\n");
                        }
                        if ($transaction->isSetSenderName()) 
                        {
                            echo("                    SenderName\n");
                            echo("                        " . $transaction->getSenderName() . "\n");
                        }
                        if ($transaction->isSetCallerName()) 
                        {
                            echo("                    CallerName\n");
                            echo("                        " . $transaction->getCallerName() . "\n");
                        }
                        if ($transaction->isSetRecipientName()) 
                        {
                            echo("                    RecipientName\n");
                            echo("                        " . $transaction->getRecipientName() . "\n");
                        }
                        if ($transaction->isSetFPSFees()) { 
                            echo("                    FPSFees\n");
                            $FPSFees = $transaction->getFPSFees();
                            if ($FPSFees->isSetCurrencyCode()) 
                            {
                                echo("                        CurrencyCode\n");
                                echo("                            " . $FPSFees->getCurrencyCode() . "\n");
                            }
                            if ($FPSFees->isSetValue()) 
                            {
                                echo("                        Value\n");
                                echo("                            " . $FPSFees->getValue() . "\n");
                            }
                        } 
                        if ($transaction->isSetBalance()) { 
                            echo("                    Balance\n");
                            $balance = $transaction->getBalance();
                            if ($balance->isSetCurrencyCode()) 
                            {
                                echo("                        CurrencyCode\n");
                                echo("                            " . $balance->getCurrencyCode() . "\n");
                            }
                            if ($balance->isSetValue()) 
                            {
                                echo("                        Value\n");
                                echo("                            " . $balance->getValue() . "\n");
                            }
                        } 
                        if ($transaction->isSetSenderTokenId()) 
                        {
                            echo("                    SenderTokenId\n");
                            echo("                        " . $transaction->getSenderTokenId() . "\n");
                        }
                        if ($transaction->isSetRecipientTokenId()) 
                        {
                            echo("                    RecipientTokenId\n");
                            echo("                        " . $transaction->getRecipientTokenId() . "\n");
                        }
                    }
                    if ($getAccountActivityResult->isSetStartTimeForNextTransaction()) 
                    {
                        echo("                StartTimeForNextTransaction\n");
                        echo("                    " . $getAccountActivityResult->getStartTimeForNextTransaction() . "\n");
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
                                                                                    