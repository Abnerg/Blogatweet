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
 * Amazon_FPS_Model_GetPrepaidBalanceResponse
 * 
 * Properties:
 * <ul>
 * 
 * <li>GetPrepaidBalanceResult: Amazon_FPS_Model_GetPrepaidBalanceResult</li>
 * <li>ResponseMetadata: Amazon_FPS_Model_ResponseMetadata</li>
 *
 * </ul>
 */ 
class Amazon_FPS_Model_GetPrepaidBalanceResponse extends Amazon_FPS_Model
{


    /**
     * Construct new Amazon_FPS_Model_GetPrepaidBalanceResponse
     * 
     * @param mixed $data DOMElement or Associative Array to construct from. 
     * 
     * Valid properties:
     * <ul>
     * 
     * <li>GetPrepaidBalanceResult: Amazon_FPS_Model_GetPrepaidBalanceResult</li>
     * <li>ResponseMetadata: Amazon_FPS_Model_ResponseMetadata</li>
     *
     * </ul>
     */
    public function __construct($data = null)
    {
        $this->_fields = array (
        'GetPrepaidBalanceResult' => array('FieldValue' => null, 'FieldType' => 'Amazon_FPS_Model_GetPrepaidBalanceResult'),
        'ResponseMetadata' => array('FieldValue' => null, 'FieldType' => 'Amazon_FPS_Model_ResponseMetadata'),
        );
        parent::__construct($data);
    }

       
    /**
     * Construct Amazon_FPS_Model_GetPrepaidBalanceResponse from XML string
     * 
     * @param string $xml XML string to construct from
     * @return Amazon_FPS_Model_GetPrepaidBalanceResponse 
     */
    public static function fromXML($xml)
    {
        $dom = new DOMDocument();
        $dom->loadXML($xml);
        $xpath = new DOMXPath($dom);
    	$xpath->registerNamespace('a', 'http://fps.amazonaws.com/doc/2008-09-17/');
        $response = $xpath->query('//a:GetPrepaidBalanceResponse');
        if ($response->length == 1) {
            return new Amazon_FPS_Model_GetPrepaidBalanceResponse(($response->item(0))); 
        } else {
            throw new Exception ("Unable to construct Amazon_FPS_Model_GetPrepaidBalanceResponse from provided XML. 
                                  Make sure that GetPrepaidBalanceResponse is a root element");
        }
          
    }
    
    /**
     * Gets the value of the GetPrepaidBalanceResult.
     * 
     * @return GetPrepaidBalanceResult GetPrepaidBalanceResult
     */
    public function getGetPrepaidBalanceResult() 
    {
        return $this->_fields['GetPrepaidBalanceResult']['FieldValue'];
    }

    /**
     * Sets the value of the GetPrepaidBalanceResult.
     * 
     * @param GetPrepaidBalanceResult GetPrepaidBalanceResult
     * @return void
     */
    public function setGetPrepaidBalanceResult($value) 
    {
        $this->_fields['GetPrepaidBalanceResult']['FieldValue'] = $value;
        return;
    }

    /**
     * Sets the value of the GetPrepaidBalanceResult  and returns this instance
     * 
     * @param GetPrepaidBalanceResult $value GetPrepaidBalanceResult
     * @return Amazon_FPS_Model_GetPrepaidBalanceResponse instance
     */
    public function withGetPrepaidBalanceResult($value)
    {
        $this->setGetPrepaidBalanceResult($value);
        return $this;
    }


    /**
     * Checks if GetPrepaidBalanceResult  is set
     * 
     * @return bool true if GetPrepaidBalanceResult property is set
     */
    public function isSetGetPrepaidBalanceResult()
    {
        return !is_null($this->_fields['GetPrepaidBalanceResult']['FieldValue']);

    }

    /**
     * Gets the value of the ResponseMetadata.
     * 
     * @return ResponseMetadata ResponseMetadata
     */
    public function getResponseMetadata() 
    {
        return $this->_fields['ResponseMetadata']['FieldValue'];
    }

    /**
     * Sets the value of the ResponseMetadata.
     * 
     * @param ResponseMetadata ResponseMetadata
     * @return void
     */
    public function setResponseMetadata($value) 
    {
        $this->_fields['ResponseMetadata']['FieldValue'] = $value;
        return;
    }

    /**
     * Sets the value of the ResponseMetadata  and returns this instance
     * 
     * @param ResponseMetadata $value ResponseMetadata
     * @return Amazon_FPS_Model_GetPrepaidBalanceResponse instance
     */
    public function withResponseMetadata($value)
    {
        $this->setResponseMetadata($value);
        return $this;
    }


    /**
     * Checks if ResponseMetadata  is set
     * 
     * @return bool true if ResponseMetadata property is set
     */
    public function isSetResponseMetadata()
    {
        return !is_null($this->_fields['ResponseMetadata']['FieldValue']);

    }



    /**
     * XML Representation for this object
     * 
     * @return string XML for this object
     */
    public function toXML() 
    {
        $xml = "";
        $xml .= "<GetPrepaidBalanceResponse xmlns=\"http://fps.amazonaws.com/doc/2008-09-17/\">";
        $xml .= $this->_toXMLFragment();
        $xml .= "</GetPrepaidBalanceResponse>";
        return $xml;
    }

}