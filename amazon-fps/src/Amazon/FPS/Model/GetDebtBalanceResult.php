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
 * Amazon_FPS_Model_GetDebtBalanceResult
 * 
 * Properties:
 * <ul>
 * 
 * <li>DebtBalance: Amazon_FPS_Model_DebtBalance</li>
 *
 * </ul>
 */ 
class Amazon_FPS_Model_GetDebtBalanceResult extends Amazon_FPS_Model
{


    /**
     * Construct new Amazon_FPS_Model_GetDebtBalanceResult
     * 
     * @param mixed $data DOMElement or Associative Array to construct from. 
     * 
     * Valid properties:
     * <ul>
     * 
     * <li>DebtBalance: Amazon_FPS_Model_DebtBalance</li>
     *
     * </ul>
     */
    public function __construct($data = null)
    {
        $this->_fields = array (
        'DebtBalance' => array('FieldValue' => null, 'FieldType' => 'Amazon_FPS_Model_DebtBalance'),
        );
        parent::__construct($data);
    }

        /**
     * Gets the value of the DebtBalance.
     * 
     * @return DebtBalance DebtBalance
     */
    public function getDebtBalance() 
    {
        return $this->_fields['DebtBalance']['FieldValue'];
    }

    /**
     * Sets the value of the DebtBalance.
     * 
     * @param DebtBalance DebtBalance
     * @return void
     */
    public function setDebtBalance($value) 
    {
        $this->_fields['DebtBalance']['FieldValue'] = $value;
        return;
    }

    /**
     * Sets the value of the DebtBalance  and returns this instance
     * 
     * @param DebtBalance $value DebtBalance
     * @return Amazon_FPS_Model_GetDebtBalanceResult instance
     */
    public function withDebtBalance($value)
    {
        $this->setDebtBalance($value);
        return $this;
    }


    /**
     * Checks if DebtBalance  is set
     * 
     * @return bool true if DebtBalance property is set
     */
    public function isSetDebtBalance()
    {
        return !is_null($this->_fields['DebtBalance']['FieldValue']);

    }




}