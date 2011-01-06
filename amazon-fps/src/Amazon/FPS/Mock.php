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
 *  @see Amazon_FPS_Interface
 */
require_once ('Amazon/FPS/Interface.php'); 

/**
 * 
 * Amazon Flexible Payments Service
 * 
 */
class  Amazon_FPS_Mock implements Amazon_FPS_Interface
{
    // Public API ------------------------------------------------------------//

            
    /**
     * Cancel Token 
     * 
     * Cancels any token installed by the calling application on its own account.
     *   
     * @see http://docs.amazonwebservices.com/${docPath}CancelToken.html      
     * @param mixed $request array of parameters for Amazon_FPS_Model_CancelToken request or Amazon_FPS_Model_CancelToken object itself
     * @see Amazon_FPS_Model_CancelToken
     * @return Amazon_FPS_Model_CancelTokenResponse Amazon_FPS_Model_CancelTokenResponse
     *
     * @throws Amazon_FPS_Exception
     */
    public function cancelToken($request) 
    {
        require_once ('Amazon/FPS/Model/CancelTokenResponse.php');
        return Amazon_FPS_Model_CancelTokenResponse::fromXML($this->_invoke('CancelToken'));
    }


            
    /**
     * Cancel 
     * 
     * Cancels an ongoing transaction and puts it in cancelled state.
     *   
     * @see http://docs.amazonwebservices.com/${docPath}Cancel.html      
     * @param mixed $request array of parameters for Amazon_FPS_Model_Cancel request or Amazon_FPS_Model_Cancel object itself
     * @see Amazon_FPS_Model_Cancel
     * @return Amazon_FPS_Model_CancelResponse Amazon_FPS_Model_CancelResponse
     *
     * @throws Amazon_FPS_Exception
     */
    public function cancel($request) 
    {
        require_once ('Amazon/FPS/Model/CancelResponse.php');
        return Amazon_FPS_Model_CancelResponse::fromXML($this->_invoke('Cancel'));
    }


            
    /**
     * Fund Prepaid 
     * 
     * Funds the prepaid balance on the given prepaid instrument.
     *   
     * @see http://docs.amazonwebservices.com/${docPath}FundPrepaid.html      
     * @param mixed $request array of parameters for Amazon_FPS_Model_FundPrepaid request or Amazon_FPS_Model_FundPrepaid object itself
     * @see Amazon_FPS_Model_FundPrepaid
     * @return Amazon_FPS_Model_FundPrepaidResponse Amazon_FPS_Model_FundPrepaidResponse
     *
     * @throws Amazon_FPS_Exception
     */
    public function fundPrepaid($request) 
    {
        require_once ('Amazon/FPS/Model/FundPrepaidResponse.php');
        return Amazon_FPS_Model_FundPrepaidResponse::fromXML($this->_invoke('FundPrepaid'));
    }


            
    /**
     * Get Account Activity 
     * 
     * Returns transactions for a given date range.
     *   
     * @see http://docs.amazonwebservices.com/${docPath}GetAccountActivity.html      
     * @param mixed $request array of parameters for Amazon_FPS_Model_GetAccountActivity request or Amazon_FPS_Model_GetAccountActivity object itself
     * @see Amazon_FPS_Model_GetAccountActivity
     * @return Amazon_FPS_Model_GetAccountActivityResponse Amazon_FPS_Model_GetAccountActivityResponse
     *
     * @throws Amazon_FPS_Exception
     */
    public function getAccountActivity($request) 
    {
        require_once ('Amazon/FPS/Model/GetAccountActivityResponse.php');
        return Amazon_FPS_Model_GetAccountActivityResponse::fromXML($this->_invoke('GetAccountActivity'));
    }


            
    /**
     * Get Account Balance 
     * 
     * Returns the account balance for an account in real time.
     *   
     * @see http://docs.amazonwebservices.com/${docPath}GetAccountBalance.html      
     * @param mixed $request array of parameters for Amazon_FPS_Model_GetAccountBalance request or Amazon_FPS_Model_GetAccountBalance object itself
     * @see Amazon_FPS_Model_GetAccountBalance
     * @return Amazon_FPS_Model_GetAccountBalanceResponse Amazon_FPS_Model_GetAccountBalanceResponse
     *
     * @throws Amazon_FPS_Exception
     */
    public function getAccountBalance($request) 
    {
        require_once ('Amazon/FPS/Model/GetAccountBalanceResponse.php');
        return Amazon_FPS_Model_GetAccountBalanceResponse::fromXML($this->_invoke('GetAccountBalance'));
    }


            
    /**
     * Get Debt Balance 
     * 
     * Returns the balance corresponding to the given credit instrument.
     *   
     * @see http://docs.amazonwebservices.com/${docPath}GetDebtBalance.html      
     * @param mixed $request array of parameters for Amazon_FPS_Model_GetDebtBalance request or Amazon_FPS_Model_GetDebtBalance object itself
     * @see Amazon_FPS_Model_GetDebtBalance
     * @return Amazon_FPS_Model_GetDebtBalanceResponse Amazon_FPS_Model_GetDebtBalanceResponse
     *
     * @throws Amazon_FPS_Exception
     */
    public function getDebtBalance($request) 
    {
        require_once ('Amazon/FPS/Model/GetDebtBalanceResponse.php');
        return Amazon_FPS_Model_GetDebtBalanceResponse::fromXML($this->_invoke('GetDebtBalance'));
    }


            
    /**
     * Get Outstanding Debt Balance 
     * 
     * Returns the total outstanding balance for all the credit instruments for the given creditor account.
     *   
     * @see http://docs.amazonwebservices.com/${docPath}GetOutstandingDebtBalance.html      
     * @param mixed $request array of parameters for Amazon_FPS_Model_GetOutstandingDebtBalance request or Amazon_FPS_Model_GetOutstandingDebtBalance object itself
     * @see Amazon_FPS_Model_GetOutstandingDebtBalance
     * @return Amazon_FPS_Model_GetOutstandingDebtBalanceResponse Amazon_FPS_Model_GetOutstandingDebtBalanceResponse
     *
     * @throws Amazon_FPS_Exception
     */
    public function getOutstandingDebtBalance($request) 
    {
        require_once ('Amazon/FPS/Model/GetOutstandingDebtBalanceResponse.php');
        return Amazon_FPS_Model_GetOutstandingDebtBalanceResponse::fromXML($this->_invoke('GetOutstandingDebtBalance'));
    }


            
    /**
     * Get Prepaid Balance 
     * 
     * Returns the balance available on the given prepaid instrument.
     *   
     * @see http://docs.amazonwebservices.com/${docPath}GetPrepaidBalance.html      
     * @param mixed $request array of parameters for Amazon_FPS_Model_GetPrepaidBalance request or Amazon_FPS_Model_GetPrepaidBalance object itself
     * @see Amazon_FPS_Model_GetPrepaidBalance
     * @return Amazon_FPS_Model_GetPrepaidBalanceResponse Amazon_FPS_Model_GetPrepaidBalanceResponse
     *
     * @throws Amazon_FPS_Exception
     */
    public function getPrepaidBalance($request) 
    {
        require_once ('Amazon/FPS/Model/GetPrepaidBalanceResponse.php');
        return Amazon_FPS_Model_GetPrepaidBalanceResponse::fromXML($this->_invoke('GetPrepaidBalance'));
    }


            
    /**
     * Get Token By Caller 
     * 
     * Returns the details of a particular token installed by this calling application using the subway co-branded UI.
     *   
     * @see http://docs.amazonwebservices.com/${docPath}GetTokenByCaller.html      
     * @param mixed $request array of parameters for Amazon_FPS_Model_GetTokenByCaller request or Amazon_FPS_Model_GetTokenByCaller object itself
     * @see Amazon_FPS_Model_GetTokenByCaller
     * @return Amazon_FPS_Model_GetTokenByCallerResponse Amazon_FPS_Model_GetTokenByCallerResponse
     *
     * @throws Amazon_FPS_Exception
     */
    public function getTokenByCaller($request) 
    {
        require_once ('Amazon/FPS/Model/GetTokenByCallerResponse.php');
        return Amazon_FPS_Model_GetTokenByCallerResponse::fromXML($this->_invoke('GetTokenByCaller'));
    }


            
    /**
     * Cancel Subscription And Refund 
     * 
     * Cancels a subscription.
     *   
     * @see http://docs.amazonwebservices.com/${docPath}CancelSubscriptionAndRefund.html      
     * @param mixed $request array of parameters for Amazon_FPS_Model_CancelSubscriptionAndRefund request or Amazon_FPS_Model_CancelSubscriptionAndRefund object itself
     * @see Amazon_FPS_Model_CancelSubscriptionAndRefund
     * @return Amazon_FPS_Model_CancelSubscriptionAndRefundResponse Amazon_FPS_Model_CancelSubscriptionAndRefundResponse
     *
     * @throws Amazon_FPS_Exception
     */
    public function cancelSubscriptionAndRefund($request) 
    {
        require_once ('Amazon/FPS/Model/CancelSubscriptionAndRefundResponse.php');
        return Amazon_FPS_Model_CancelSubscriptionAndRefundResponse::fromXML($this->_invoke('CancelSubscriptionAndRefund'));
    }


            
    /**
     * Get Token Usage 
     * 
     * Returns the usage of a token.
     *   
     * @see http://docs.amazonwebservices.com/${docPath}GetTokenUsage.html      
     * @param mixed $request array of parameters for Amazon_FPS_Model_GetTokenUsage request or Amazon_FPS_Model_GetTokenUsage object itself
     * @see Amazon_FPS_Model_GetTokenUsage
     * @return Amazon_FPS_Model_GetTokenUsageResponse Amazon_FPS_Model_GetTokenUsageResponse
     *
     * @throws Amazon_FPS_Exception
     */
    public function getTokenUsage($request) 
    {
        require_once ('Amazon/FPS/Model/GetTokenUsageResponse.php');
        return Amazon_FPS_Model_GetTokenUsageResponse::fromXML($this->_invoke('GetTokenUsage'));
    }


            
    /**
     * Get Tokens 
     * 
     * Returns a list of tokens installed on the given account.
     *   
     * @see http://docs.amazonwebservices.com/${docPath}GetTokens.html      
     * @param mixed $request array of parameters for Amazon_FPS_Model_GetTokens request or Amazon_FPS_Model_GetTokens object itself
     * @see Amazon_FPS_Model_GetTokens
     * @return Amazon_FPS_Model_GetTokensResponse Amazon_FPS_Model_GetTokensResponse
     *
     * @throws Amazon_FPS_Exception
     */
    public function getTokens($request) 
    {
        require_once ('Amazon/FPS/Model/GetTokensResponse.php');
        return Amazon_FPS_Model_GetTokensResponse::fromXML($this->_invoke('GetTokens'));
    }


            
    /**
     * Get Total Prepaid Liability 
     * 
     * Returns the total liability held by the given account corresponding to all the prepaid instruments owned by the account.
     *   
     * @see http://docs.amazonwebservices.com/${docPath}GetTotalPrepaidLiability.html      
     * @param mixed $request array of parameters for Amazon_FPS_Model_GetTotalPrepaidLiability request or Amazon_FPS_Model_GetTotalPrepaidLiability object itself
     * @see Amazon_FPS_Model_GetTotalPrepaidLiability
     * @return Amazon_FPS_Model_GetTotalPrepaidLiabilityResponse Amazon_FPS_Model_GetTotalPrepaidLiabilityResponse
     *
     * @throws Amazon_FPS_Exception
     */
    public function getTotalPrepaidLiability($request) 
    {
        require_once ('Amazon/FPS/Model/GetTotalPrepaidLiabilityResponse.php');
        return Amazon_FPS_Model_GetTotalPrepaidLiabilityResponse::fromXML($this->_invoke('GetTotalPrepaidLiability'));
    }


            
    /**
     * Get Transaction 
     * 
     * Returns all details of a transaction.
     *   
     * @see http://docs.amazonwebservices.com/${docPath}GetTransaction.html      
     * @param mixed $request array of parameters for Amazon_FPS_Model_GetTransaction request or Amazon_FPS_Model_GetTransaction object itself
     * @see Amazon_FPS_Model_GetTransaction
     * @return Amazon_FPS_Model_GetTransactionResponse Amazon_FPS_Model_GetTransactionResponse
     *
     * @throws Amazon_FPS_Exception
     */
    public function getTransaction($request) 
    {
        require_once ('Amazon/FPS/Model/GetTransactionResponse.php');
        return Amazon_FPS_Model_GetTransactionResponse::fromXML($this->_invoke('GetTransaction'));
    }


            
    /**
     * Get Transaction Status 
     * 
     * Gets the latest status of a transaction.
     *   
     * @see http://docs.amazonwebservices.com/${docPath}GetTransactionStatus.html      
     * @param mixed $request array of parameters for Amazon_FPS_Model_GetTransactionStatus request or Amazon_FPS_Model_GetTransactionStatus object itself
     * @see Amazon_FPS_Model_GetTransactionStatus
     * @return Amazon_FPS_Model_GetTransactionStatusResponse Amazon_FPS_Model_GetTransactionStatusResponse
     *
     * @throws Amazon_FPS_Exception
     */
    public function getTransactionStatus($request) 
    {
        require_once ('Amazon/FPS/Model/GetTransactionStatusResponse.php');
        return Amazon_FPS_Model_GetTransactionStatusResponse::fromXML($this->_invoke('GetTransactionStatus'));
    }


            
    /**
     * Get Payment Instruction 
     * 
     * Gets the payment instruction of a token.
     *   
     * @see http://docs.amazonwebservices.com/${docPath}GetPaymentInstruction.html      
     * @param mixed $request array of parameters for Amazon_FPS_Model_GetPaymentInstruction request or Amazon_FPS_Model_GetPaymentInstruction object itself
     * @see Amazon_FPS_Model_GetPaymentInstruction
     * @return Amazon_FPS_Model_GetPaymentInstructionResponse Amazon_FPS_Model_GetPaymentInstructionResponse
     *
     * @throws Amazon_FPS_Exception
     */
    public function getPaymentInstruction($request) 
    {
        require_once ('Amazon/FPS/Model/GetPaymentInstructionResponse.php');
        return Amazon_FPS_Model_GetPaymentInstructionResponse::fromXML($this->_invoke('GetPaymentInstruction'));
    }


            
    /**
     * Install Payment Instruction 
     * Installs a payment instruction for caller.
     *   
     * @see http://docs.amazonwebservices.com/${docPath}InstallPaymentInstruction.html      
     * @param mixed $request array of parameters for Amazon_FPS_Model_InstallPaymentInstruction request or Amazon_FPS_Model_InstallPaymentInstruction object itself
     * @see Amazon_FPS_Model_InstallPaymentInstruction
     * @return Amazon_FPS_Model_InstallPaymentInstructionResponse Amazon_FPS_Model_InstallPaymentInstructionResponse
     *
     * @throws Amazon_FPS_Exception
     */
    public function installPaymentInstruction($request) 
    {
        require_once ('Amazon/FPS/Model/InstallPaymentInstructionResponse.php');
        return Amazon_FPS_Model_InstallPaymentInstructionResponse::fromXML($this->_invoke('InstallPaymentInstruction'));
    }


            
    /**
     * Pay 
     * 
     * Allows calling applications to move money from a sender to a recipient.
     *   
     * @see http://docs.amazonwebservices.com/${docPath}Pay.html      
     * @param mixed $request array of parameters for Amazon_FPS_Model_Pay request or Amazon_FPS_Model_Pay object itself
     * @see Amazon_FPS_Model_Pay
     * @return Amazon_FPS_Model_PayResponse Amazon_FPS_Model_PayResponse
     *
     * @throws Amazon_FPS_Exception
     */
    public function pay($request) 
    {
        require_once ('Amazon/FPS/Model/PayResponse.php');
        return Amazon_FPS_Model_PayResponse::fromXML($this->_invoke('Pay'));
    }


            
    /**
     * Refund 
     * 
     * Refunds a previously completed transaction.
     *   
     * @see http://docs.amazonwebservices.com/${docPath}Refund.html      
     * @param mixed $request array of parameters for Amazon_FPS_Model_Refund request or Amazon_FPS_Model_Refund object itself
     * @see Amazon_FPS_Model_Refund
     * @return Amazon_FPS_Model_RefundResponse Amazon_FPS_Model_RefundResponse
     *
     * @throws Amazon_FPS_Exception
     */
    public function refund($request) 
    {
        require_once ('Amazon/FPS/Model/RefundResponse.php');
        return Amazon_FPS_Model_RefundResponse::fromXML($this->_invoke('Refund'));
    }


            
    /**
     * Reserve 
     * 
     * Reserve API is part of the Reserve and Settle API conjunction that serve the purpose of a pay where the authorization and settlement have a timing 				difference.
     *   
     * @see http://docs.amazonwebservices.com/${docPath}Reserve.html      
     * @param mixed $request array of parameters for Amazon_FPS_Model_Reserve request or Amazon_FPS_Model_Reserve object itself
     * @see Amazon_FPS_Model_Reserve
     * @return Amazon_FPS_Model_ReserveResponse Amazon_FPS_Model_ReserveResponse
     *
     * @throws Amazon_FPS_Exception
     */
    public function reserve($request) 
    {
        require_once ('Amazon/FPS/Model/ReserveResponse.php');
        return Amazon_FPS_Model_ReserveResponse::fromXML($this->_invoke('Reserve'));
    }


            
    /**
     * Settle 
     * 
     * The Settle API is used in conjunction with the Reserve API and is used to settle previously reserved transaction.
     *   
     * @see http://docs.amazonwebservices.com/${docPath}Settle.html      
     * @param mixed $request array of parameters for Amazon_FPS_Model_Settle request or Amazon_FPS_Model_Settle object itself
     * @see Amazon_FPS_Model_Settle
     * @return Amazon_FPS_Model_SettleResponse Amazon_FPS_Model_SettleResponse
     *
     * @throws Amazon_FPS_Exception
     */
    public function settle($request) 
    {
        require_once ('Amazon/FPS/Model/SettleResponse.php');
        return Amazon_FPS_Model_SettleResponse::fromXML($this->_invoke('Settle'));
    }


            
    /**
     * Settle Debt 
     * 
     * Allows a caller to initiate a transaction that atomically transfers money from a sender’s payment instrument to the recipient, while decreasing corresponding 				debt balance.
     *   
     * @see http://docs.amazonwebservices.com/${docPath}SettleDebt.html      
     * @param mixed $request array of parameters for Amazon_FPS_Model_SettleDebt request or Amazon_FPS_Model_SettleDebt object itself
     * @see Amazon_FPS_Model_SettleDebt
     * @return Amazon_FPS_Model_SettleDebtResponse Amazon_FPS_Model_SettleDebtResponse
     *
     * @throws Amazon_FPS_Exception
     */
    public function settleDebt($request) 
    {
        require_once ('Amazon/FPS/Model/SettleDebtResponse.php');
        return Amazon_FPS_Model_SettleDebtResponse::fromXML($this->_invoke('SettleDebt'));
    }


            
    /**
     * Write Off Debt 
     * 
     * Allows a creditor to write off the debt balance accumulated partially or fully at any time.
     *   
     * @see http://docs.amazonwebservices.com/${docPath}WriteOffDebt.html      
     * @param mixed $request array of parameters for Amazon_FPS_Model_WriteOffDebt request or Amazon_FPS_Model_WriteOffDebt object itself
     * @see Amazon_FPS_Model_WriteOffDebt
     * @return Amazon_FPS_Model_WriteOffDebtResponse Amazon_FPS_Model_WriteOffDebtResponse
     *
     * @throws Amazon_FPS_Exception
     */
    public function writeOffDebt($request) 
    {
        require_once ('Amazon/FPS/Model/WriteOffDebtResponse.php');
        return Amazon_FPS_Model_WriteOffDebtResponse::fromXML($this->_invoke('WriteOffDebt'));
    }


            
    /**
     * Verify Signature 
     * 
     * Verify the signature that FPS sent in IPN or callback urls.
     *   
     * @see http://docs.amazonwebservices.com/${docPath}VerifySignature.html      
     * @param mixed $request array of parameters for Amazon_FPS_Model_VerifySignature request or Amazon_FPS_Model_VerifySignature object itself
     * @see Amazon_FPS_Model_VerifySignature
     * @return Amazon_FPS_Model_VerifySignatureResponse Amazon_FPS_Model_VerifySignatureResponse
     *
     * @throws Amazon_FPS_Exception
     */
    public function verifySignature($request) 
    {
        require_once ('Amazon/FPS/Model/VerifySignatureResponse.php');
        return Amazon_FPS_Model_VerifySignatureResponse::fromXML($this->_invoke('VerifySignature'));
    }

    // Private API ------------------------------------------------------------//

    private function _invoke($actionName)
    {
        return $xml = file_get_contents('Amazon/FPS/Mock/' . $actionName . 'Response.xml', /** search include path */ TRUE);
    }
}