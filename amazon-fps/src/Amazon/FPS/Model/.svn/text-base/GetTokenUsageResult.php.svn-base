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
 * Amazon_FPS_Model_GetTokenUsageResult
 * 
 * Properties:
 * <ul>
 * 
 * <li>TokenUsageLimits: Amazon_FPS_Model_TokenUsageLimit</li>
 *
 * </ul>
 */ 
class Amazon_FPS_Model_GetTokenUsageResult extends Amazon_FPS_Model
{


    /**
     * Construct new Amazon_FPS_Model_GetTokenUsageResult
     * 
     * @param mixed $data DOMElement or Associative Array to construct from. 
     * 
     * Valid properties:
     * <ul>
     * 
     * <li>TokenUsageLimits: Amazon_FPS_Model_TokenUsageLimit</li>
     *
     * </ul>
     */
    public function __construct($data = null)
    {
        $this->_fields = array (
        'TokenUsageLimits' => array('FieldValue' => array(), 'FieldType' => array('Amazon_FPS_Model_TokenUsageLimit')),
        );
        parent::__construct($data);
    }

        /**
     * Gets the value of the TokenUsageLimits.
     * 
     * @return array of TokenUsageLimit TokenUsageLimits
     */
    public function getTokenUsageLimits() 
    {
        return $this->_fields['TokenUsageLimits']['FieldValue'];
    }

    /**
     * Sets the value of the TokenUsageLimits.
     * 
     * @param mixed TokenUsageLimit or an array of TokenUsageLimit TokenUsageLimits
     * @return this instance
     */
    public function setTokenUsageLimits($tokenUsageLimits) 
    {
        if (!$this->_isNumericArray($tokenUsageLimits)) {
            $tokenUsageLimits =  array ($tokenUsageLimits);    
        }
        $this->_fields['TokenUsageLimits']['FieldValue'] = $tokenUsageLimits;
        return $this;
    }


    /**
     * Sets single or multiple values of TokenUsageLimits list via variable number of arguments. 
     * For example, to set the list with two elements, simply pass two values as arguments to this function
     * <code>withTokenUsageLimits($tokenUsageLimits1, $tokenUsageLimits2)</code>
     * 
     * @param TokenUsageLimit  $tokenUsageLimitArgs one or more TokenUsageLimits
     * @return Amazon_FPS_Model_GetTokenUsageResult  instance
     */
    public function withTokenUsageLimits($tokenUsageLimitArgs)
    {
        foreach (func_get_args() as $tokenUsageLimits) {
            $this->_fields['TokenUsageLimits']['FieldValue'][] = $tokenUsageLimits;
        }
        return $this;
    }   



    /**
     * Checks if TokenUsageLimits list is non-empty
     * 
     * @return bool true if TokenUsageLimits list is non-empty
     */
    public function isSetTokenUsageLimits()
    {
        return count ($this->_fields['TokenUsageLimits']['FieldValue']) > 0;
    }




}