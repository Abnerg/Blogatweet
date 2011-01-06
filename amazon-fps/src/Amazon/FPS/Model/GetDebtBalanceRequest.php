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
 * Amazon_FPS_Model_GetDebtBalanceRequest
 * 
 * Properties:
 * <ul>
 * 
 * <li>CreditInstrumentId: string</li>
 *
 * </ul>
 */ 
class Amazon_FPS_Model_GetDebtBalanceRequest extends Amazon_FPS_Model
{


    /**
     * Construct new Amazon_FPS_Model_GetDebtBalanceRequest
     * 
     * @param mixed $data DOMElement or Associative Array to construct from. 
     * 
     * Valid properties:
     * <ul>
     * 
     * <li>CreditInstrumentId: string</li>
     *
     * </ul>
     */
    public function __construct($data = null)
    {
        $this->_fields = array (
        'CreditInstrumentId' => array('FieldValue' => null, 'FieldType' => 'string'),
        );
        parent::__construct($data);
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
     * @return Amazon_FPS_Model_GetDebtBalanceRequest instance
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




}