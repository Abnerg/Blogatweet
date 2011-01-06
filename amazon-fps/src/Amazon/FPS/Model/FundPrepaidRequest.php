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
 * Amazon_FPS_Model_FundPrepaidRequest
 * 
 * Properties:
 * <ul>
 * 
 * <li>SenderTokenId: string</li>
 * <li>PrepaidInstrumentId: string</li>
 * <li>FundingAmount: Amazon_FPS_Model_Amount</li>
 * <li>CallerReference: string</li>
 * <li>SenderDescription: string</li>
 * <li>CallerDescription: string</li>
 * <li>DescriptorPolicy: Amazon_FPS_Model_DescriptorPolicy</li>
 * <li>TransactionTimeoutInMins: int</li>
 *
 * </ul>
 */ 
class Amazon_FPS_Model_FundPrepaidRequest extends Amazon_FPS_Model
{


    /**
     * Construct new Amazon_FPS_Model_FundPrepaidRequest
     * 
     * @param mixed $data DOMElement or Associative Array to construct from. 
     * 
     * Valid properties:
     * <ul>
     * 
     * <li>SenderTokenId: string</li>
     * <li>PrepaidInstrumentId: string</li>
     * <li>FundingAmount: Amazon_FPS_Model_Amount</li>
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
        'PrepaidInstrumentId' => array('FieldValue' => null, 'FieldType' => 'string'),
        'FundingAmount' => array('FieldValue' => null, 'FieldType' => 'Amazon_FPS_Model_Amount'),
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
     * @return Amazon_FPS_Model_FundPrepaidRequest instance
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
     * Gets the value of the PrepaidInstrumentId property.
     * 
     * @return string PrepaidInstrumentId
     */
    public function getPrepaidInstrumentId() 
    {
        return $this->_fields['PrepaidInstrumentId']['FieldValue'];
    }

    /**
     * Sets the value of the PrepaidInstrumentId property.
     * 
     * @param string PrepaidInstrumentId
     * @return this instance
     */
    public function setPrepaidInstrumentId($value) 
    {
        $this->_fields['PrepaidInstrumentId']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Sets the value of the PrepaidInstrumentId and returns this instance
     * 
     * @param string $value PrepaidInstrumentId
     * @return Amazon_FPS_Model_FundPrepaidRequest instance
     */
    public function withPrepaidInstrumentId($value)
    {
        $this->setPrepaidInstrumentId($value);
        return $this;
    }


    /**
     * Checks if PrepaidInstrumentId is set
     * 
     * @return bool true if PrepaidInstrumentId  is set
     */
    public function isSetPrepaidInstrumentId()
    {
        return !is_null($this->_fields['PrepaidInstrumentId']['FieldValue']);
    }

    /**
     * Gets the value of the FundingAmount.
     * 
     * @return Amount FundingAmount
     */
    public function getFundingAmount() 
    {
        return $this->_fields['FundingAmount']['FieldValue'];
    }

    /**
     * Sets the value of the FundingAmount.
     * 
     * @param Amount FundingAmount
     * @return void
     */
    public function setFundingAmount($value) 
    {
        $this->_fields['FundingAmount']['FieldValue'] = $value;
        return;
    }

    /**
     * Sets the value of the FundingAmount  and returns this instance
     * 
     * @param Amount $value FundingAmount
     * @return Amazon_FPS_Model_FundPrepaidRequest instance
     */
    public function withFundingAmount($value)
    {
        $this->setFundingAmount($value);
        return $this;
    }


    /**
     * Checks if FundingAmount  is set
     * 
     * @return bool true if FundingAmount property is set
     */
    public function isSetFundingAmount()
    {
        return !is_null($this->_fields['FundingAmount']['FieldValue']);

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
     * @return Amazon_FPS_Model_FundPrepaidRequest instance
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
     * @return Amazon_FPS_Model_FundPrepaidRequest instance
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
     * @return Amazon_FPS_Model_FundPrepaidRequest instance
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
     * @return Amazon_FPS_Model_FundPrepaidRequest instance
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
     * @return Amazon_FPS_Model_FundPrepaidRequest instance
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