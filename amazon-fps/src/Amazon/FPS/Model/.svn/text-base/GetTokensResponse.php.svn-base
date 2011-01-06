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
 * Amazon_FPS_Model_GetTokensResponse
 * 
 * Properties:
 * <ul>
 * 
 * <li>GetTokensResult: Amazon_FPS_Model_GetTokensResult</li>
 * <li>ResponseMetadata: Amazon_FPS_Model_ResponseMetadata</li>
 *
 * </ul>
 */ 
class Amazon_FPS_Model_GetTokensResponse extends Amazon_FPS_Model
{


    /**
     * Construct new Amazon_FPS_Model_GetTokensResponse
     * 
     * @param mixed $data DOMElement or Associative Array to construct from. 
     * 
     * Valid properties:
     * <ul>
     * 
     * <li>GetTokensResult: Amazon_FPS_Model_GetTokensResult</li>
     * <li>ResponseMetadata: Amazon_FPS_Model_ResponseMetadata</li>
     *
     * </ul>
     */
    public function __construct($data = null)
    {
        $this->_fields = array (
        'GetTokensResult' => array('FieldValue' => null, 'FieldType' => 'Amazon_FPS_Model_GetTokensResult'),
        'ResponseMetadata' => array('FieldValue' => null, 'FieldType' => 'Amazon_FPS_Model_ResponseMetadata'),
        );
        parent::__construct($data);
    }

       
    /**
     * Construct Amazon_FPS_Model_GetTokensResponse from XML string
     * 
     * @param string $xml XML string to construct from
     * @return Amazon_FPS_Model_GetTokensResponse 
     */
    public static function fromXML($xml)
    {
        $dom = new DOMDocument();
        $dom->loadXML($xml);
        $xpath = new DOMXPath($dom);
    	$xpath->registerNamespace('a', 'http://fps.amazonaws.com/doc/2008-09-17/');
        $response = $xpath->query('//a:GetTokensResponse');
        if ($response->length == 1) {
            return new Amazon_FPS_Model_GetTokensResponse(($response->item(0))); 
        } else {
            throw new Exception ("Unable to construct Amazon_FPS_Model_GetTokensResponse from provided XML. 
                                  Make sure that GetTokensResponse is a root element");
        }
          
    }
    
    /**
     * Gets the value of the GetTokensResult.
     * 
     * @return GetTokensResult GetTokensResult
     */
    public function getGetTokensResult() 
    {
        return $this->_fields['GetTokensResult']['FieldValue'];
    }

    /**
     * Sets the value of the GetTokensResult.
     * 
     * @param GetTokensResult GetTokensResult
     * @return void
     */
    public function setGetTokensResult($value) 
    {
        $this->_fields['GetTokensResult']['FieldValue'] = $value;
        return;
    }

    /**
     * Sets the value of the GetTokensResult  and returns this instance
     * 
     * @param GetTokensResult $value GetTokensResult
     * @return Amazon_FPS_Model_GetTokensResponse instance
     */
    public function withGetTokensResult($value)
    {
        $this->setGetTokensResult($value);
        return $this;
    }


    /**
     * Checks if GetTokensResult  is set
     * 
     * @return bool true if GetTokensResult property is set
     */
    public function isSetGetTokensResult()
    {
        return !is_null($this->_fields['GetTokensResult']['FieldValue']);

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
     * @return Amazon_FPS_Model_GetTokensResponse instance
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
        $xml .= "<GetTokensResponse xmlns=\"http://fps.amazonaws.com/doc/2008-09-17/\">";
        $xml .= $this->_toXMLFragment();
        $xml .= "</GetTokensResponse>";
        return $xml;
    }

}