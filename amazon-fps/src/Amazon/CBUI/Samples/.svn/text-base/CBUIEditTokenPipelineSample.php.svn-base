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
 
require_once('.config.inc.php');

require_once('Amazon/CBUI/CBUIEditTokenPipeline.php');

class CBUIEditTokenPipelineSample {

    function test() {
        $pipeline = new Amazon_FPS_CBUIEditTokenPipeline(AWS_ACCESS_KEY_ID, AWS_SECRET_ACCESS_KEY);

        $pipeline->setMandatoryParameters("callerReferenceEditToken", 
				"http://www.mysite.com/call_back.jsp", 
                "H6VWDM8TPZYCGBJY5W3P3QYK7HZNYQ7NPHVV2SYKW19MIY2G4BG4YQTVDYW3I1SM");
        
        //EditToken url
        print "Sample CBUI url for EditToken pipeline : " . $pipeline->getUrl() . "\n";
    }
}

CBUIEditTokenPipelineSample::test();
