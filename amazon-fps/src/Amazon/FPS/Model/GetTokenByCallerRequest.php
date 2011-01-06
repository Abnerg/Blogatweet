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
 * Amazon_FPS_Model_GetTokenByCallerRequest
 * 
 * Properties:
 * <ul>
 * 
 * <li>TokenId: string</li>
 * <li>CallerReference: string</li>
 *
 * </ul>
 */ 
class Amazon_FPS_Model_GetTokenByCallerRequest extends Amazon_FPS_Model
{


    /**
     * Construct new Amazon_FPS_Model_GetTokenByCallerRequest
     * 
     * @param mixed $data DOMElement or Associative Array to construct from. 
     * 
     * Valid properties:
     * <ul>
     * 
     * <li>TokenId: string</li>
     * <li>CallerReference: string</li>
     *
     * </ul>
     */
    public function __construct($data = null)
    {
        $this->_fields = array (
        'TokenId' => array('FieldValue' => null, 'FieldType' => 'string'),
        'CallerReference' => array('FieldValue' => null, 'FieldType' => 'string'),
        );
        parent::__construct($data);
    }

        /**
     * Gets the value of the TokenId property.
     * 
     * @return string TokenId
     */
    public function getTokenId() 
    {
        return $this->_fields['TokenId']['FieldValue'];
    }

    /**
     * Sets the value of the TokenId property.
     * 
     * @param string TokenId
     * @return this instance
     */
    public function setTokenId($value) 
    {
        $this->_fields['TokenId']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Sets the value of the TokenId and returns this instance
     * 
     * @param string $value TokenId
     * @return Amazon_FPS_Model_GetTokenByCallerRequest instance
     */
    public function withTokenId($value)
    {
        $this->setTokenId($value);
        return $this;
    }


    /**
     * Checks if TokenId is set
     * 
     * @return bool true if TokenId  is set
     */
    public function isSetTokenId()
    {
        return !is_null($this->_fields['TokenId']['FieldValue']);
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
     * @return Amazon_FPS_Model_GetTokenByCallerRequest instance
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




}