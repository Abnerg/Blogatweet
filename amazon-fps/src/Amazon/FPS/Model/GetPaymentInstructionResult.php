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
 *  @see Amazon_FPS_Model
 */
require_once ('Amazon/FPS/Model.php');  

    

/**
 * Amazon_FPS_Model_GetPaymentInstructionResult
 * 
 * Properties:
 * <ul>
 * 
 * <li>Token: Amazon_FPS_Model_Token</li>
 * <li>PaymentInstruction: string</li>
 * <li>CallerReference: string</li>
 * <li>TokenFriendlyName: string</li>
 *
 * </ul>
 */ 
class Amazon_FPS_Model_GetPaymentInstructionResult extends Amazon_FPS_Model
{


    /**
     * Construct new Amazon_FPS_Model_GetPaymentInstructionResult
     * 
     * @param mixed $data DOMElement or Associative Array to construct from. 
     * 
     * Valid properties:
     * <ul>
     * 
     * <li>Token: Amazon_FPS_Model_Token</li>
     * <li>PaymentInstruction: string</li>
     * <li>CallerReference: string</li>
     * <li>TokenFriendlyName: string</li>
     *
     * </ul>
     */
    public function __construct($data = null)
    {
        $this->_fields = array (
        'Token' => array('FieldValue' => null, 'FieldType' => 'Amazon_FPS_Model_Token'),
        'PaymentInstruction' => array('FieldValue' => null, 'FieldType' => 'string'),
        'CallerReference' => array('FieldValue' => null, 'FieldType' => 'string'),
        'TokenFriendlyName' => array('FieldValue' => null, 'FieldType' => 'string'),
        );
        parent::__construct($data);
    }

        /**
     * Gets the value of the Token.
     * 
     * @return Token Token
     */
    public function getToken() 
    {
        return $this->_fields['Token']['FieldValue'];
    }

    /**
     * Sets the value of the Token.
     * 
     * @param Token Token
     * @return void
     */
    public function setToken($value) 
    {
        $this->_fields['Token']['FieldValue'] = $value;
        return;
    }

    /**
     * Sets the value of the Token  and returns this instance
     * 
     * @param Token $value Token
     * @return Amazon_FPS_Model_GetPaymentInstructionResult instance
     */
    public function withToken($value)
    {
        $this->setToken($value);
        return $this;
    }


    /**
     * Checks if Token  is set
     * 
     * @return bool true if Token property is set
     */
    public function isSetToken()
    {
        return !is_null($this->_fields['Token']['FieldValue']);

    }

    /**
     * Gets the value of the PaymentInstruction property.
     * 
     * @return string PaymentInstruction
     */
    public function getPaymentInstruction() 
    {
        return $this->_fields['PaymentInstruction']['FieldValue'];
    }

    /**
     * Sets the value of the PaymentInstruction property.
     * 
     * @param string PaymentInstruction
     * @return this instance
     */
    public function setPaymentInstruction($value) 
    {
        $this->_fields['PaymentInstruction']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Sets the value of the PaymentInstruction and returns this instance
     * 
     * @param string $value PaymentInstruction
     * @return Amazon_FPS_Model_GetPaymentInstructionResult instance
     */
    public function withPaymentInstruction($value)
    {
        $this->setPaymentInstruction($value);
        return $this;
    }


    /**
     * Checks if PaymentInstruction is set
     * 
     * @return bool true if PaymentInstruction  is set
     */
    public function isSetPaymentInstruction()
    {
        return !is_null($this->_fields['PaymentInstruction']['FieldValue']);
    }

    /**
     * Gets the value of the CallerReference property.
     * 
     * @return string CallerReference
     */
    public function getCallerReference() 
    {
        return $this->_fields['CallerReference']['FieldValue'];
    }

    /**
     * Sets the value of the CallerReference property.
     * 
     * @param string CallerReference
     * @return this instance
     */
    public function setCallerReference($value) 
    {
        $this->_fields['CallerReference']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Sets the value of the CallerReference and returns this instance
     * 
     * @param string $value CallerReference
     * @return Amazon_FPS_Model_GetPaymentInstructionResult instance
     */
    public function withCallerReference($value)
    {
        $this->setCallerReference($value);
        return $this;
    }


    /**
     * Checks if CallerReference is set
     * 
     * @return bool true if CallerReference  is set
     */
    public function isSetCallerReference()
    {
        return !is_null($this->_fields['CallerReference']['FieldValue']);
    }

    /**
     * Gets the value of the TokenFriendlyName property.
     * 
     * @return string TokenFriendlyName
     */
    public function getTokenFriendlyName() 
    {
        return $this->_fields['TokenFriendlyName']['FieldValue'];
    }

    /**
     * Sets the value of the TokenFriendlyName property.
     * 
     * @param string TokenFriendlyName
     * @return this instance
     */
    public function setTokenFriendlyName($value) 
    {
        $this->_fields['TokenFriendlyName']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Sets the value of the TokenFriendlyName and returns this instance
     * 
     * @param string $value TokenFriendlyName
     * @return Amazon_FPS_Model_GetPaymentInstructionResult instance
     */
    public function withTokenFriendlyName($value)
    {
        $this->setTokenFriendlyName($value);
        return $this;
    }


    /**
     * Checks if TokenFriendlyName is set
     * 
     * @return bool true if TokenFriendlyName  is set
     */
    public function isSetTokenFriendlyName()
    {
        return !is_null($this->_fields['TokenFriendlyName']['FieldValue']);
    }




}