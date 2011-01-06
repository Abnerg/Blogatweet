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
 * Amazon_FPS_Model_GetDebtBalanceResponse
 * 
 * Properties:
 * <ul>
 * 
 * <li>GetDebtBalanceResult: Amazon_FPS_Model_GetDebtBalanceResult</li>
 * <li>ResponseMetadata: Amazon_FPS_Model_ResponseMetadata</li>
 *
 * </ul>
 */ 
class Amazon_FPS_Model_GetDebtBalanceResponse extends Amazon_FPS_Model
{


    /**
     * Construct new Amazon_FPS_Model_GetDebtBalanceResponse
     * 
     * @param mixed $data DOMElement or Associative Array to construct from. 
     * 
     * Valid properties:
     * <ul>
     * 
     * <li>GetDebtBalanceResult: Amazon_FPS_Model_GetDebtBalanceResult</li>
     * <li>ResponseMetadata: Amazon_FPS_Model_ResponseMetadata</li>
     *
     * </ul>
     */
    public function __construct($data = null)
    {
        $this->_fields = array (
        'GetDebtBalanceResult' => array('FieldValue' => null, 'FieldType' => 'Amazon_FPS_Model_GetDebtBalanceResult'),
        'ResponseMetadata' => array('FieldValue' => null, 'FieldType' => 'Amazon_FPS_Model_ResponseMetadata'),
        );
        parent::__construct($data);
    }

       
    /**
     * Construct Amazon_FPS_Model_GetDebtBalanceResponse from XML string
     * 
     * @param string $xml XML string to construct from
     * @return Amazon_FPS_Model_GetDebtBalanceResponse 
     */
    public static function fromXML($xml)
    {
        $dom = new DOMDocument();
        $dom->loadXML($xml);
        $xpath = new DOMXPath($dom);
    	$xpath->registerNamespace('a', 'http://fps.amazonaws.com/doc/2008-09-17/');
        $response = $xpath->query('//a:GetDebtBalanceResponse');
        if ($response->length == 1) {
            return new Amazon_FPS_Model_GetDebtBalanceResponse(($response->item(0))); 
        } else {
            throw new Exception ("Unable to construct Amazon_FPS_Model_GetDebtBalanceResponse from provided XML. 
                                  Make sure that GetDebtBalanceResponse is a root element");
        }
          
    }
    
    /**
     * Gets the value of the GetDebtBalanceResult.
     * 
     * @return GetDebtBalanceResult GetDebtBalanceResult
     */
    public function getGetDebtBalanceResult() 
    {
        return $this->_fields['GetDebtBalanceResult']['FieldValue'];
    }

    /**
     * Sets the value of the GetDebtBalanceResult.
     * 
     * @param GetDebtBalanceResult GetDebtBalanceResult
     * @return void
     */
    public function setGetDebtBalanceResult($value) 
    {
        $this->_fields['GetDebtBalanceResult']['FieldValue'] = $value;
        return;
    }

    /**
     * Sets the value of the GetDebtBalanceResult  and returns this instance
     * 
     * @param GetDebtBalanceResult $value GetDebtBalanceResult
     * @return Amazon_FPS_Model_GetDebtBalanceResponse instance
     */
    public function withGetDebtBalanceResult($value)
    {
        $this->setGetDebtBalanceResult($value);
        return $this;
    }


    /**
     * Checks if GetDebtBalanceResult  is set
     * 
     * @return bool true if GetDebtBalanceResult property is set
     */
    public function isSetGetDebtBalanceResult()
    {
        return !is_null($this->_fields['GetDebtBalanceResult']['FieldValue']);

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
     * @return Amazon_FPS_Model_GetDebtBalanceResponse instance
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
        $xml .= "<GetDebtBalanceResponse xmlns=\"http://fps.amazonaws.com/doc/2008-09-17/\">";
        $xml .= $this->_toXMLFragment();
        $xml .= "</GetDebtBalanceResponse>";
        return $xml;
    }

}