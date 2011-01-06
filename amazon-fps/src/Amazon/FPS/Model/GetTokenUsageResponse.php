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
 * Amazon_FPS_Model_GetTokenUsageResponse
 * 
 * Properties:
 * <ul>
 * 
 * <li>GetTokenUsageResult: Amazon_FPS_Model_GetTokenUsageResult</li>
 * <li>ResponseMetadata: Amazon_FPS_Model_ResponseMetadata</li>
 *
 * </ul>
 */ 
class Amazon_FPS_Model_GetTokenUsageResponse extends Amazon_FPS_Model
{


    /**
     * Construct new Amazon_FPS_Model_GetTokenUsageResponse
     * 
     * @param mixed $data DOMElement or Associative Array to construct from. 
     * 
     * Valid properties:
     * <ul>
     * 
     * <li>GetTokenUsageResult: Amazon_FPS_Model_GetTokenUsageResult</li>
     * <li>ResponseMetadata: Amazon_FPS_Model_ResponseMetadata</li>
     *
     * </ul>
     */
    public function __construct($data = null)
    {
        $this->_fields = array (
        'GetTokenUsageResult' => array('FieldValue' => null, 'FieldType' => 'Amazon_FPS_Model_GetTokenUsageResult'),
        'ResponseMetadata' => array('FieldValue' => null, 'FieldType' => 'Amazon_FPS_Model_ResponseMetadata'),
        );
        parent::__construct($data);
    }

       
    /**
     * Construct Amazon_FPS_Model_GetTokenUsageResponse from XML string
     * 
     * @param string $xml XML string to construct from
     * @return Amazon_FPS_Model_GetTokenUsageResponse 
     */
    public static function fromXML($xml)
    {
        $dom = new DOMDocument();
        $dom->loadXML($xml);
        $xpath = new DOMXPath($dom);
    	$xpath->registerNamespace('a', 'http://fps.amazonaws.com/doc/2008-09-17/');
        $response = $xpath->query('//a:GetTokenUsageResponse');
        if ($response->length == 1) {
            return new Amazon_FPS_Model_GetTokenUsageResponse(($response->item(0))); 
        } else {
            throw new Exception ("Unable to construct Amazon_FPS_Model_GetTokenUsageResponse from provided XML. 
                                  Make sure that GetTokenUsageResponse is a root element");
        }
          
    }
    
    /**
     * Gets the value of the GetTokenUsageResult.
     * 
     * @return GetTokenUsageResult GetTokenUsageResult
     */
    public function getGetTokenUsageResult() 
    {
        return $this->_fields['GetTokenUsageResult']['FieldValue'];
    }

    /**
     * Sets the value of the GetTokenUsageResult.
     * 
     * @param GetTokenUsageResult GetTokenUsageResult
     * @return void
     */
    public function setGetTokenUsageResult($value) 
    {
        $this->_fields['GetTokenUsageResult']['FieldValue'] = $value;
        return;
    }

    /**
     * Sets the value of the GetTokenUsageResult  and returns this instance
     * 
     * @param GetTokenUsageResult $value GetTokenUsageResult
     * @return Amazon_FPS_Model_GetTokenUsageResponse instance
     */
    public function withGetTokenUsageResult($value)
    {
        $this->setGetTokenUsageResult($value);
        return $this;
    }


    /**
     * Checks if GetTokenUsageResult  is set
     * 
     * @return bool true if GetTokenUsageResult property is set
     */
    public function isSetGetTokenUsageResult()
    {
        return !is_null($this->_fields['GetTokenUsageResult']['FieldValue']);

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
     * @return Amazon_FPS_Model_GetTokenUsageResponse instance
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
        $xml .= "<GetTokenUsageResponse xmlns=\"http://fps.amazonaws.com/doc/2008-09-17/\">";
        $xml .= $this->_toXMLFragment();
        $xml .= "</GetTokenUsageResponse>";
        return $xml;
    }

}