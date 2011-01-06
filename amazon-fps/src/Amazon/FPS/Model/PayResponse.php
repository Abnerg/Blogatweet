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
 * Amazon_FPS_Model_PayResponse
 * 
 * Properties:
 * <ul>
 * 
 * <li>PayResult: Amazon_FPS_Model_PayResult</li>
 * <li>ResponseMetadata: Amazon_FPS_Model_ResponseMetadata</li>
 *
 * </ul>
 */ 
class Amazon_FPS_Model_PayResponse extends Amazon_FPS_Model
{


    /**
     * Construct new Amazon_FPS_Model_PayResponse
     * 
     * @param mixed $data DOMElement or Associative Array to construct from. 
     * 
     * Valid properties:
     * <ul>
     * 
     * <li>PayResult: Amazon_FPS_Model_PayResult</li>
     * <li>ResponseMetadata: Amazon_FPS_Model_ResponseMetadata</li>
     *
     * </ul>
     */
    public function __construct($data = null)
    {
        $this->_fields = array (
        'PayResult' => array('FieldValue' => null, 'FieldType' => 'Amazon_FPS_Model_PayResult'),
        'ResponseMetadata' => array('FieldValue' => null, 'FieldType' => 'Amazon_FPS_Model_ResponseMetadata'),
        );
        parent::__construct($data);
    }

       
    /**
     * Construct Amazon_FPS_Model_PayResponse from XML string
     * 
     * @param string $xml XML string to construct from
     * @return Amazon_FPS_Model_PayResponse 
     */
    public static function fromXML($xml)
    {
        $dom = new DOMDocument();
        $dom->loadXML($xml);
        $xpath = new DOMXPath($dom);
    	$xpath->registerNamespace('a', 'http://fps.amazonaws.com/doc/2008-09-17/');
        $response = $xpath->query('//a:PayResponse');
        if ($response->length == 1) {
            return new Amazon_FPS_Model_PayResponse(($response->item(0))); 
        } else {
            throw new Exception ("Unable to construct Amazon_FPS_Model_PayResponse from provided XML. 
                                  Make sure that PayResponse is a root element");
        }
          
    }
    
    /**
     * Gets the value of the PayResult.
     * 
     * @return PayResult PayResult
     */
    public function getPayResult() 
    {
        return $this->_fields['PayResult']['FieldValue'];
    }

    /**
     * Sets the value of the PayResult.
     * 
     * @param PayResult PayResult
     * @return void
     */
    public function setPayResult($value) 
    {
        $this->_fields['PayResult']['FieldValue'] = $value;
        return;
    }

    /**
     * Sets the value of the PayResult  and returns this instance
     * 
     * @param PayResult $value PayResult
     * @return Amazon_FPS_Model_PayResponse instance
     */
    public function withPayResult($value)
    {
        $this->setPayResult($value);
        return $this;
    }


    /**
     * Checks if PayResult  is set
     * 
     * @return bool true if PayResult property is set
     */
    public function isSetPayResult()
    {
        return !is_null($this->_fields['PayResult']['FieldValue']);

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
     * @return Amazon_FPS_Model_PayResponse instance
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
        $xml .= "<PayResponse xmlns=\"http://fps.amazonaws.com/doc/2008-09-17/\">";
        $xml .= $this->_toXMLFragment();
        $xml .= "</PayResponse>";
        return $xml;
    }

}