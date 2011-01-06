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
 * Amazon_FPS_Model_GetTokensResult
 * 
 * Properties:
 * <ul>
 * 
 * <li>Token: Amazon_FPS_Model_Token</li>
 *
 * </ul>
 */ 
class Amazon_FPS_Model_GetTokensResult extends Amazon_FPS_Model
{


    /**
     * Construct new Amazon_FPS_Model_GetTokensResult
     * 
     * @param mixed $data DOMElement or Associative Array to construct from. 
     * 
     * Valid properties:
     * <ul>
     * 
     * <li>Token: Amazon_FPS_Model_Token</li>
     *
     * </ul>
     */
    public function __construct($data = null)
    {
        $this->_fields = array (
        'Token' => array('FieldValue' => array(), 'FieldType' => array('Amazon_FPS_Model_Token')),
        );
        parent::__construct($data);
    }

        /**
     * Gets the value of the Token.
     * 
     * @return array of Token Token
     */
    public function getToken() 
    {
        return $this->_fields['Token']['FieldValue'];
    }

    /**
     * Sets the value of the Token.
     * 
     * @param mixed Token or an array of Token Token
     * @return this instance
     */
    public function setToken($token) 
    {
        if (!$this->_isNumericArray($token)) {
            $token =  array ($token);    
        }
        $this->_fields['Token']['FieldValue'] = $token;
        return $this;
    }


    /**
     * Sets single or multiple values of Token list via variable number of arguments. 
     * For example, to set the list with two elements, simply pass two values as arguments to this function
     * <code>withToken($token1, $token2)</code>
     * 
     * @param Token  $tokenArgs one or more Token
     * @return Amazon_FPS_Model_GetTokensResult  instance
     */
    public function withToken($tokenArgs)
    {
        foreach (func_get_args() as $token) {
            $this->_fields['Token']['FieldValue'][] = $token;
        }
        return $this;
    }   



    /**
     * Checks if Token list is non-empty
     * 
     * @return bool true if Token list is non-empty
     */
    public function isSetToken()
    {
        return count ($this->_fields['Token']['FieldValue']) > 0;
    }




}