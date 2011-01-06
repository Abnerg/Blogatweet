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
 * Amazon_FPS_Model_SettleDebtRequest
 * 
 * Properties:
 * <ul>
 * 
 * <li>SenderTokenId: string</li>
 * <li>CreditInstrumentId: string</li>
 * <li>SettlementAmount: Amazon_FPS_Model_Amount</li>
 * <li>CallerReference: string</li>
 * <li>SenderDescription: string</li>
 * <li>CallerDescription: string</li>
 * <li>DescriptorPolicy: Amazon_FPS_Model_DescriptorPolicy</li>
 * <li>TransactionTimeoutInMins: int</li>
 *
 * </ul>
 */ 
class Amazon_FPS_Model_SettleDebtRequest extends Amazon_FPS_Model
{


    /**
     * Construct new Amazon_FPS_Model_SettleDebtRequest
     * 
     * @param mixed $data DOMElement or Associative Array to construct from. 
     * 
     * Valid properties:
     * <ul>
     * 
     * <li>SenderTokenId: string</li>
     * <li>CreditInstrumentId: string</li>
     * <li>SettlementAmount: Amazon_FPS_Model_Amount</li>
     * <li>CallerReference: string</li>
     * <li>SenderDescription: string</li>
     * <li>CallerDescription: string</li>
     * <li>DescriptorPolicy: Amazon_FPS_Model_DescriptorPolicy</li>
     * <li>TransactionTimeoutInMins: int</li>
     *
     * </ul>
     */
    public function __construct($data = null)
    {
        $this->_fields = array (
        'SenderTokenId' => array('FieldValue' => null, 'FieldType' => 'string'),
        'CreditInstrumentId' => array('FieldValue' => null, 'FieldType' => 'string'),
        'SettlementAmount' => array('FieldValue' => null, 'FieldType' => 'Amazon_FPS_Model_Amount'),
        'CallerReference' => array('FieldValue' => null, 'FieldType' => 'string'),
        'SenderDescription' => array('FieldValue' => null, 'FieldType' => 'string'),
        'CallerDescription' => array('FieldValue' => null, 'FieldType' => 'string'),
        'DescriptorPolicy' => array('FieldValue' => null, 'FieldType' => 'Amazon_FPS_Model_DescriptorPolicy'),
        'TransactionTimeoutInMins' => array('FieldValue' => null, 'FieldType' => 'int'),
        );
        parent::__construct($data);
    }

        /**
     * Gets the value of the SenderTokenId property.
     * 
     * @return string SenderTokenId
     */
    public function getSenderTokenId() 
    {
        return $this->_fields['SenderTokenId']['FieldValue'];
    }

    /**
     * Sets the value of the SenderTokenId property.
     * 
     * @param string SenderTokenId
     * @return this instance
     */
    public function setSenderTokenId($value) 
    {
        $this->_fields['SenderTokenId']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Sets the value of the SenderTokenId and returns this instance
     * 
     * @param string $value SenderTokenId
     * @return Amazon_FPS_Model_SettleDebtRequest instance
     */
    public function withSenderTokenId($value)
    {
        $this->setSenderTokenId($value);
        return $this;
    }


    /**
     * Checks if SenderTokenId is set
     * 
     * @return bool true if SenderTokenId  is set
     */
    public function isSetSenderTokenId()
    {
        return !is_null($this->_fields['SenderTokenId']['FieldValue']);
    }

    /**
     * Gets the value of the CreditInstrumentId property.
     * 
     * @return string CreditInstrumentId
     */
    public function getCreditInstrumentId() 
    {
        return $this->_fields['CreditInstrumentId']['FieldValue'];
    }

    /**
     * Sets the value of the CreditInstrumentId property.
     * 
     * @param string CreditInstrumentId
     * @return this instance
     */
    public function setCreditInstrumentId($value) 
    {
        $this->_fields['CreditInstrumentId']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Sets the value of the CreditInstrumentId and returns this instance
     * 
     * @param string $value CreditInstrumentId
     * @return Amazon_FPS_Model_SettleDebtRequest instance
     */
    public function withCreditInstrumentId($value)
    {
        $this->setCreditInstrumentId($value);
        return $this;
    }


    /**
     * Checks if CreditInstrumentId is set
     * 
     * @return bool true if CreditInstrumentId  is set
     */
    public function isSetCreditInstrumentId()
    {
        return !is_null($this->_fields['CreditInstrumentId']['FieldValue']);
    }

    /**
     * Gets the value of the SettlementAmount.
     * 
     * @return Amount SettlementAmount
     */
    public function getSettlementAmount() 
    {
        return $this->_fields['SettlementAmount']['FieldValue'];
    }

    /**
     * Sets the value of the SettlementAmount.
     * 
     * @param Amount SettlementAmount
     * @return void
     */
    public function setSettlementAmount($value) 
    {
        $this->_fields['SettlementAmount']['FieldValue'] = $value;
        return;
    }

    /**
     * Sets the value of the SettlementAmount  and returns this instance
     * 
     * @param Amount $value SettlementAmount
     * @return Amazon_FPS_Model_SettleDebtRequest instance
     */
    public function withSettlementAmount($value)
    {
        $this->setSettlementAmount($value);
        return $this;
    }


    /**
     * Checks if SettlementAmount  is set
     * 
     * @return bool true if SettlementAmount property is set
     */
    public function isSetSettlementAmount()
    {
        return !is_null($this->_fields['SettlementAmount']['FieldValue']);

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
     * @return Amazon_FPS_Model_SettleDebtRequest instance
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
     * Gets the value of the SenderDescription property.
     * 
     * @return string SenderDescription
     */
    public function getSenderDescription() 
    {
        return $this->_fields['SenderDescription']['FieldValue'];
    }

    /**
     * Sets the value of the SenderDescription property.
     * 
     * @param string SenderDescription
     * @return this instance
     */
    public function setSenderDescription($value) 
    {
        $this->_fields['SenderDescription']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Sets the value of the SenderDescription and returns this instance
     * 
     * @param string $value SenderDescription
     * @return Amazon_FPS_Model_SettleDebtRequest instance
     */
    public function withSenderDescription($value)
    {
        $this->setSenderDescription($value);
        return $this;
    }


    /**
     * Checks if SenderDescription is set
     * 
     * @return bool true if SenderDescription  is set
     */
    public function isSetSenderDescription()
    {
        return !is_null($this->_fields['SenderDescription']['FieldValue']);
    }

    /**
     * Gets the value of the CallerDescription property.
     * 
     * @return string CallerDescription
     */
    public function getCallerDescription() 
    {
        return $this->_fields['CallerDescription']['FieldValue'];
    }

    /**
     * Sets the value of the CallerDescription property.
     * 
     * @param string CallerDescription
     * @return this instance
     */
    public function setCallerDescription($value) 
    {
        $this->_fields['CallerDescription']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Sets the value of the CallerDescription and returns this instance
     * 
     * @param string $value CallerDescription
     * @return Amazon_FPS_Model_SettleDebtRequest instance
     */
    public function withCallerDescription($value)
    {
        $this->setCallerDescription($value);
        return $this;
    }


    /**
     * Checks if CallerDescription is set
     * 
     * @return bool true if CallerDescription  is set
     */
    public function isSetCallerDescription()
    {
        return !is_null($this->_fields['CallerDescription']['FieldValue']);
    }

    /**
     * Gets the value of the DescriptorPolicy.
     * 
     * @return DescriptorPolicy DescriptorPolicy
     */
    public function getDescriptorPolicy() 
    {
        return $this->_fields['DescriptorPolicy']['FieldValue'];
    }

    /**
     * Sets the value of the DescriptorPolicy.
     * 
     * @param DescriptorPolicy DescriptorPolicy
     * @return void
     */
    public function setDescriptorPolicy($value) 
    {
        $this->_fields['DescriptorPolicy']['FieldValue'] = $value;
        return;
    }

    /**
     * Sets the value of the DescriptorPolicy  and returns this instance
     * 
     * @param DescriptorPolicy $value DescriptorPolicy
     * @return Amazon_FPS_Model_SettleDebtRequest instance
     */
    public function withDescriptorPolicy($value)
    {
        $this->setDescriptorPolicy($value);
        return $this;
    }


    /**
     * Checks if DescriptorPolicy  is set
     * 
     * @return bool true if DescriptorPolicy property is set
     */
    public function isSetDescriptorPolicy()
    {
        return !is_null($this->_fields['DescriptorPolicy']['FieldValue']);

    }

    /**
     * Gets the value of the TransactionTimeoutInMins property.
     * 
     * @return int TransactionTimeoutInMins
     */
    public function getTransactionTimeoutInMins() 
    {
        return $this->_fields['TransactionTimeoutInMins']['FieldValue'];
    }

    /**
     * Sets the value of the TransactionTimeoutInMins property.
     * 
     * @param int TransactionTimeoutInMins
     * @return this instance
     */
    public function setTransactionTimeoutInMins($value) 
    {
        $this->_fields['TransactionTimeoutInMins']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Sets the value of the TransactionTimeoutInMins and returns this instance
     * 
     * @param int $value TransactionTimeoutInMins
     * @return Amazon_FPS_Model_SettleDebtRequest instance
     */
    public function withTransactionTimeoutInMins($value)
    {
        $this->setTransactionTimeoutInMins($value);
        return $this;
    }


    /**
     * Checks if TransactionTimeoutInMins is set
     * 
     * @return bool true if TransactionTimeoutInMins  is set
     */
    public function isSetTransactionTimeoutInMins()
    {
        return !is_null($this->_fields['TransactionTimeoutInMins']['FieldValue']);
    }




}