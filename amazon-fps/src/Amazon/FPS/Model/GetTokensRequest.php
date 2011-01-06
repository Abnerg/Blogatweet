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
 * Amazon_FPS_Model_GetTokensRequest
 * 
 * Properties:
 * <ul>
 * 
 * <li>TokenStatus: string</li>
 * <li>TokenType: string</li>
 * <li>CallerReference: string</li>
 * <li>TokenFriendlyName: string</li>
 *
 * </ul>
 */ 
class Amazon_FPS_Model_GetTokensRequest extends Amazon_FPS_Model
{


    /**
     * Construct new Amazon_FPS_Model_GetTokensRequest
     * 
     * @param mixed $data DOMElement or Associative Array to construct from. 
     * 
     * Valid properties:
     * <ul>
     * 
     * <li>TokenStatus: string</li>
     * <li>TokenType: string</li>
     * <li>CallerReference: string</li>
     * <li>TokenFriendlyName: string</li>
     *
     * </ul>
     */
    public function __construct($data = null)
    {
        $this->_fields = array (
        'TokenStatus' => array('FieldValue' => null, 'FieldType' => 'string'),
        'TokenType' => array('FieldValue' => null, 'FieldType' => 'string'),
        'CallerReference' => array('FieldValue' => null, 'FieldType' => 'string'),
        'TokenFriendlyName' => array('FieldValue' => null, 'FieldType' => 'string'),
        );
        parent::__construct($data);
    }

        /**
     * Gets the value of the TokenStatus property.
     * 
     * @return string TokenStatus
     */
    public function getTokenStatus() 
    {
        return $this->_fields['TokenStatus']['FieldValue'];
    }

    /**
     * Sets the value of the TokenStatus property.
     * 
     * @param string TokenStatus
     * @return this instance
     */
    public function setTokenStatus($value) 
    {
        $this->_fields['TokenStatus']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Sets the value of the TokenStatus and returns this instance
     * 
     * @param string $value TokenStatus
     * @return Amazon_FPS_Model_GetTokensRequest instance
     */
    public function withTokenStatus($value)
    {
        $this->setTokenStatus($value);
        return $this;
    }


    /**
     * Checks if TokenStatus is set
     * 
     * @return bool true if TokenStatus  is set
     */
    public function isSetTokenStatus()
    {
        return !is_null($this->_fields['TokenStatus']['FieldValue']);
    }

    /**
     * Gets the value of the TokenType property.
     * 
     * @return string TokenType
     */
    public function getTokenType() 
    {
        return $this->_fields['TokenType']['FieldValue'];
    }

    /**
     * Sets the value of the TokenType property.
     * 
     * @param string TokenType
     * @return this instance
     */
    public function setTokenType($value) 
    {
        $this->_fields['TokenType']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Sets the value of the TokenType and returns this instance
     * 
     * @param string $value TokenType
     * @return Amazon_FPS_Model_GetTokensRequest instance
     */
    public function withTokenType($value)
    {
        $this->setTokenType($value);
        return $this;
    }


    /**
     * Checks if TokenType is set
     * 
     * @return bool true if TokenType  is set
     */
    public function isSetTokenType()
    {
        return !is_null($this->_fields['TokenType']['FieldValue']);
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
     * @return Amazon_FPS_Model_GetTokensRequest instance
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
     * @return Amazon_FPS_Model_GetTokensRequest instance
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