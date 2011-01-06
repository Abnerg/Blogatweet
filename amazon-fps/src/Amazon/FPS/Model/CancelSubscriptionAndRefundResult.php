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
 * Amazon_FPS_Model_CancelSubscriptionAndRefundResult
 * 
 * Properties:
 * <ul>
 * 
 * <li>RefundTransactionId: string</li>
 *
 * </ul>
 */ 
class Amazon_FPS_Model_CancelSubscriptionAndRefundResult extends Amazon_FPS_Model
{


    /**
     * Construct new Amazon_FPS_Model_CancelSubscriptionAndRefundResult
     * 
     * @param mixed $data DOMElement or Associative Array to construct from. 
     * 
     * Valid properties:
     * <ul>
     * 
     * <li>RefundTransactionId: string</li>
     *
     * </ul>
     */
    public function __construct($data = null)
    {
        $this->_fields = array (
        'RefundTransactionId' => array('FieldValue' => null, 'FieldType' => 'string'),
        );
        parent::__construct($data);
    }

        /**
     * Gets the value of the RefundTransactionId property.
     * 
     * @return string RefundTransactionId
     */
    public function getRefundTransactionId() 
    {
        return $this->_fields['RefundTransactionId']['FieldValue'];
    }

    /**
     * Sets the value of the RefundTransactionId property.
     * 
     * @param string RefundTransactionId
     * @return this instance
     */
    public function setRefundTransactionId($value) 
    {
        $this->_fields['RefundTransactionId']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Sets the value of the RefundTransactionId and returns this instance
     * 
     * @param string $value RefundTransactionId
     * @return Amazon_FPS_Model_CancelSubscriptionAndRefundResult instance
     */
    public function withRefundTransactionId($value)
    {
        $this->setRefundTransactionId($value);
        return $this;
    }


    /**
     * Checks if RefundTransactionId is set
     * 
     * @return bool true if RefundTransactionId  is set
     */
    public function isSetRefundTransactionId()
    {
        return !is_null($this->_fields['RefundTransactionId']['FieldValue']);
    }




}