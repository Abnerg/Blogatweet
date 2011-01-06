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
 * Amazon_FPS_Model_GetAccountActivityResult
 * 
 * Properties:
 * <ul>
 * 
 * <li>BatchSize: int</li>
 * <li>Transaction: Amazon_FPS_Model_Transaction</li>
 * <li>StartTimeForNextTransaction: string</li>
 *
 * </ul>
 */ 
class Amazon_FPS_Model_GetAccountActivityResult extends Amazon_FPS_Model
{


    /**
     * Construct new Amazon_FPS_Model_GetAccountActivityResult
     * 
     * @param mixed $data DOMElement or Associative Array to construct from. 
     * 
     * Valid properties:
     * <ul>
     * 
     * <li>BatchSize: int</li>
     * <li>Transaction: Amazon_FPS_Model_Transaction</li>
     * <li>StartTimeForNextTransaction: string</li>
     *
     * </ul>
     */
    public function __construct($data = null)
    {
        $this->_fields = array (
        'BatchSize' => array('FieldValue' => null, 'FieldType' => 'int'),
        'Transaction' => array('FieldValue' => array(), 'FieldType' => array('Amazon_FPS_Model_Transaction')),
        'StartTimeForNextTransaction' => array('FieldValue' => null, 'FieldType' => 'string'),
        );
        parent::__construct($data);
    }

        /**
     * Gets the value of the BatchSize property.
     * 
     * @return int BatchSize
     */
    public function getBatchSize() 
    {
        return $this->_fields['BatchSize']['FieldValue'];
    }

    /**
     * Sets the value of the BatchSize property.
     * 
     * @param int BatchSize
     * @return this instance
     */
    public function setBatchSize($value) 
    {
        $this->_fields['BatchSize']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Sets the value of the BatchSize and returns this instance
     * 
     * @param int $value BatchSize
     * @return Amazon_FPS_Model_GetAccountActivityResult instance
     */
    public function withBatchSize($value)
    {
        $this->setBatchSize($value);
        return $this;
    }


    /**
     * Checks if BatchSize is set
     * 
     * @return bool true if BatchSize  is set
     */
    public function isSetBatchSize()
    {
        return !is_null($this->_fields['BatchSize']['FieldValue']);
    }

    /**
     * Gets the value of the Transaction.
     * 
     * @return array of Transaction Transaction
     */
    public function getTransaction() 
    {
        return $this->_fields['Transaction']['FieldValue'];
    }

    /**
     * Sets the value of the Transaction.
     * 
     * @param mixed Transaction or an array of Transaction Transaction
     * @return this instance
     */
    public function setTransaction($transaction) 
    {
        if (!$this->_isNumericArray($transaction)) {
            $transaction =  array ($transaction);    
        }
        $this->_fields['Transaction']['FieldValue'] = $transaction;
        return $this;
    }


    /**
     * Sets single or multiple values of Transaction list via variable number of arguments. 
     * For example, to set the list with two elements, simply pass two values as arguments to this function
     * <code>withTransaction($transaction1, $transaction2)</code>
     * 
     * @param Transaction  $transactionArgs one or more Transaction
     * @return Amazon_FPS_Model_GetAccountActivityResult  instance
     */
    public function withTransaction($transactionArgs)
    {
        foreach (func_get_args() as $transaction) {
            $this->_fields['Transaction']['FieldValue'][] = $transaction;
        }
        return $this;
    }   



    /**
     * Checks if Transaction list is non-empty
     * 
     * @return bool true if Transaction list is non-empty
     */
    public function isSetTransaction()
    {
        return count ($this->_fields['Transaction']['FieldValue']) > 0;
    }

    /**
     * Gets the value of the StartTimeForNextTransaction property.
     * 
     * @return string StartTimeForNextTransaction
     */
    public function getStartTimeForNextTransaction() 
    {
        return $this->_fields['StartTimeForNextTransaction']['FieldValue'];
    }

    /**
     * Sets the value of the StartTimeForNextTransaction property.
     * 
     * @param string StartTimeForNextTransaction
     * @return this instance
     */
    public function setStartTimeForNextTransaction($value) 
    {
        $this->_fields['StartTimeForNextTransaction']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Sets the value of the StartTimeForNextTransaction and returns this instance
     * 
     * @param string $value StartTimeForNextTransaction
     * @return Amazon_FPS_Model_GetAccountActivityResult instance
     */
    public function withStartTimeForNextTransaction($value)
    {
        $this->setStartTimeForNextTransaction($value);
        return $this;
    }


    /**
     * Checks if StartTimeForNextTransaction is set
     * 
     * @return bool true if StartTimeForNextTransaction  is set
     */
    public function isSetStartTimeForNextTransaction()
    {
        return !is_null($this->_fields['StartTimeForNextTransaction']['FieldValue']);
    }




}