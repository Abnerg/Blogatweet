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
 * Amazon_FPS_Model_GetPrepaidBalanceResult
 * 
 * Properties:
 * <ul>
 * 
 * <li>PrepaidBalance: Amazon_FPS_Model_PrepaidBalance</li>
 *
 * </ul>
 */ 
class Amazon_FPS_Model_GetPrepaidBalanceResult extends Amazon_FPS_Model
{


    /**
     * Construct new Amazon_FPS_Model_GetPrepaidBalanceResult
     * 
     * @param mixed $data DOMElement or Associative Array to construct from. 
     * 
     * Valid properties:
     * <ul>
     * 
     * <li>PrepaidBalance: Amazon_FPS_Model_PrepaidBalance</li>
     *
     * </ul>
     */
    public function __construct($data = null)
    {
        $this->_fields = array (
        'PrepaidBalance' => array('FieldValue' => null, 'FieldType' => 'Amazon_FPS_Model_PrepaidBalance'),
        );
        parent::__construct($data);
    }

        /**
     * Gets the value of the PrepaidBalance.
     * 
     * @return PrepaidBalance PrepaidBalance
     */
    public function getPrepaidBalance() 
    {
        return $this->_fields['PrepaidBalance']['FieldValue'];
    }

    /**
     * Sets the value of the PrepaidBalance.
     * 
     * @param PrepaidBalance PrepaidBalance
     * @return void
     */
    public function setPrepaidBalance($value) 
    {
        $this->_fields['PrepaidBalance']['FieldValue'] = $value;
        return;
    }

    /**
     * Sets the value of the PrepaidBalance  and returns this instance
     * 
     * @param PrepaidBalance $value PrepaidBalance
     * @return Amazon_FPS_Model_GetPrepaidBalanceResult instance
     */
    public function withPrepaidBalance($value)
    {
        $this->setPrepaidBalance($value);
        return $this;
    }


    /**
     * Checks if PrepaidBalance  is set
     * 
     * @return bool true if PrepaidBalance property is set
     */
    public function isSetPrepaidBalance()
    {
        return !is_null($this->_fields['PrepaidBalance']['FieldValue']);

    }




}