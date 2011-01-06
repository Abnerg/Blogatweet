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
 * Amazon_FPS_Model_GetPrepaidBalanceRequest
 * 
 * Properties:
 * <ul>
 * 
 * <li>PrepaidInstrumentId: string</li>
 *
 * </ul>
 */ 
class Amazon_FPS_Model_GetPrepaidBalanceRequest extends Amazon_FPS_Model
{


    /**
     * Construct new Amazon_FPS_Model_GetPrepaidBalanceRequest
     * 
     * @param mixed $data DOMElement or Associative Array to construct from. 
     * 
     * Valid properties:
     * <ul>
     * 
     * <li>PrepaidInstrumentId: string</li>
     *
     * </ul>
     */
    public function __construct($data = null)
    {
        $this->_fields = array (
        'PrepaidInstrumentId' => array('FieldValue' => null, 'FieldType' => 'string'),
        );
        parent::__construct($data);
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
     * @return Amazon_FPS_Model_GetPrepaidBalanceRequest instance
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




}