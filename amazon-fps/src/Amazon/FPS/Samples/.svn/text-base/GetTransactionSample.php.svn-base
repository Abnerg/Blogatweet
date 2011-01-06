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
 * Get Transaction  Sample
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
 * sample for Get Transaction Action
 ***********************************************************************/
 // @TODO: set request. Action can be passed as Amazon_FPS_Model_GetTransactionRequest
 // object or array of parameters
 // invokeGetTransaction($service, $request);

                                                                            
/**
  * Get Transaction Action Sample
  * 
  * Returns all details of a transaction.
  *   
  * @param Amazon_FPS_Interface $service instance of Amazon_FPS_Interface
  * @param mixed $request Amazon_FPS_Model_GetTransaction or array of parameters
  */
  function invokeGetTransaction(Amazon_FPS_Interface $service, $request) 
  {
      try {
              $response = $service->getTransaction($request);
              
                echo ("Service Response\n");
                echo ("=============================================================================\n");

                echo("        GetTransactionResponse\n");
                if ($response->isSetGetTransactionResult()) { 
                    echo("            GetTransactionResult\n");
                    $getTransactionResult = $response->getGetTransactionResult();
                    if ($getTransactionResult->isSetTransaction()) { 
                        echo("                Transaction\n");
                        $transaction = $getTransactionResult->getTransaction();
                        if ($transaction->isSetTransactionId()) 
                        {
                            echo("                    TransactionId\n");
                            echo("                        " . $transaction->getTransactionId() . "\n");
                        }
                        if ($transaction->isSetCallerReference()) 
                        {
                            echo("                    CallerReference\n");
                            echo("                        " . $transaction->getCallerReference() . "\n");
                        }
                        if ($transaction->isSetCallerDescription()) 
                        {
                            echo("                    CallerDescription\n");
                            echo("                        " . $transaction->getCallerDescription() . "\n");
                        }
                        if ($transaction->isSetSenderDescription()) 
                        {
                            echo("                    SenderDescription\n");
                            echo("                        " . $transaction->getSenderDescription() . "\n");
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
                        if ($transaction->isSetMarketplaceFees()) { 
                            echo("                    MarketplaceFees\n");
                            $marketplaceFees = $transaction->getMarketplaceFees();
                            if ($marketplaceFees->isSetCurrencyCode()) 
                            {
                                echo("                        CurrencyCode\n");
                                echo("                            " . $marketplaceFees->getCurrencyCode() . "\n");
                            }
                            if ($marketplaceFees->isSetValue()) 
                            {
                                echo("                        Value\n");
                                echo("                            " . $marketplaceFees->getValue() . "\n");
                            }
                        } 
                        if ($transaction->isSetFPSFeesPaidBy()) 
                        {
                            echo("                    FPSFeesPaidBy\n");
                            echo("                        " . $transaction->getFPSFeesPaidBy() . "\n");
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
                        if ($transaction->isSetPrepaidInstrumentId()) 
                        {
                            echo("                    PrepaidInstrumentId\n");
                            echo("                        " . $transaction->getPrepaidInstrumentId() . "\n");
                        }
                        if ($transaction->isSetCreditInstrumentId()) 
                        {
                            echo("                    CreditInstrumentId\n");
                            echo("                        " . $transaction->getCreditInstrumentId() . "\n");
                        }
                        if ($transaction->isSetFPSOperation()) 
                        {
                            echo("                    FPSOperation\n");
                            echo("                        " . $transaction->getFPSOperation() . "\n");
                        }
                        if ($transaction->isSetPaymentMethod()) 
                        {
                            echo("                    PaymentMethod\n");
                            echo("                        " . $transaction->getPaymentMethod() . "\n");
                        }
                        if ($transaction->isSetTransactionStatus()) 
                        {
                            echo("                    TransactionStatus\n");
                            echo("                        " . $transaction->getTransactionStatus() . "\n");
                        }
                        if ($transaction->isSetStatusCode()) 
                        {
                            echo("                    StatusCode\n");
                            echo("                        " . $transaction->getStatusCode() . "\n");
                        }
                        if ($transaction->isSetStatusMessage()) 
                        {
                            echo("                    StatusMessage\n");
                            echo("                        " . $transaction->getStatusMessage() . "\n");
                        }
                        if ($transaction->isSetSenderName()) 
                        {
                            echo("                    SenderName\n");
                            echo("                        " . $transaction->getSenderName() . "\n");
                        }
                        if ($transaction->isSetSenderEmail()) 
                        {
                            echo("                    SenderEmail\n");
                            echo("                        " . $transaction->getSenderEmail() . "\n");
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
                        if ($transaction->isSetRecipientEmail()) 
                        {
                            echo("                    RecipientEmail\n");
                            echo("                        " . $transaction->getRecipientEmail() . "\n");
                        }
                        $relatedTransactionList = $transaction->getRelatedTransaction();
                        foreach ($relatedTransactionList as $relatedTransaction) {
                            echo("                    RelatedTransaction\n");
                            if ($relatedTransaction->isSetTransactionId()) 
                            {
                                echo("                        TransactionId\n");
                                echo("                            " . $relatedTransaction->getTransactionId() . "\n");
                            }
                            if ($relatedTransaction->isSetRelationType()) 
                            {
                                echo("                        RelationType\n");
                                echo("                            " . $relatedTransaction->getRelationType() . "\n");
                            }
                        }
                        $statusHistoryList = $transaction->getStatusHistory();
                        foreach ($statusHistoryList as $statusHistory) {
                            echo("                    StatusHistory\n");
                            if ($statusHistory->isSetDate()) 
                            {
                                echo("                        Date\n");
                                echo("                            " . $statusHistory->getDate() . "\n");
                            }
                            if ($statusHistory->isSetTransactionStatus()) 
                            {
                                echo("                        TransactionStatus\n");
                                echo("                            " . $statusHistory->getTransactionStatus() . "\n");
                            }
                            if ($statusHistory->isSetStatusCode()) 
                            {
                                echo("                        StatusCode\n");
                                echo("                            " . $statusHistory->getStatusCode() . "\n");
                            }
                            if ($statusHistory->isSetAmount()) { 
                                echo("                        Amount\n");
                                $amount = $statusHistory->getAmount();
                                if ($amount->isSetCurrencyCode()) 
                                {
                                    echo("                            CurrencyCode\n");
                                    echo("                                " . $amount->getCurrencyCode() . "\n");
                                }
                                if ($amount->isSetValue()) 
                                {
                                    echo("                            Value\n");
                                    echo("                                " . $amount->getValue() . "\n");
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
                                            