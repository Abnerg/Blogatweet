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

require_once '.config.inc.php';
require_once 'Amazon/IpnReturnUrlValidation/SignatureUtilsForOutbound.php';
  
class Amazon_FPS_ReturnUrlVerificationSampleCode {

	public static function test() {
        $utils = new Amazon_FPS_SignatureUtilsForOutbound();
        
        //Parameters present in return url.
        $params["expiry"] = "10/2013";
        $params["tokenID"] = "Q5IG5ETFCEBU8KBLTI4JHINQVL6VAJVHICBRR49AKLPIEZH1KB1S8C7VHAJJMLJ3";
        $params["status"] = "SC";
        $params["callerReference"] = "1253247023946cMcrTRrjtLjNrZGNKchWfDtUEIGuJfiOBAAJYPjbytBV";
        $params["signatureMethod"] = "RSA-SHA1";
        $params["signatureVersion"] = "2";
        $params["certificateUrl"] = "https://fps.amazonaws.com/certs/090909/PKICert.pem";
        $params["signature"] = "H4NTAsp3YwAEiyQ86j5B53lksv2hwwEaEFxtdWFpy9xX764AZy/Dm0RLEykUUyPVLgqCOlMopay5"
          . "Qxr/VDwhdYAzgQzA8VCV8x9Mn0caKsJT2HCU6tSLNa6bLwzg/ildCm2lHDho1Xt2yaBHMt+/Cn4q"
          . "I5B+6PDrb8csuAWxW/mbUhk7AzazZMfQciJNjS5k+INlcvOOtQqoA/gVeBLsXK5jNsTh09cNa7pb"
          . "gAvey+0DEjYnIRX+beJV6EMCPZxnXDGo0fA1PENLWXIHtAoIJAfLYEkVbT2lva2tZ0KBBWENnSjf"
          . "26lMZVokypIo4huoGaZMp1IVkImFi3qC6ipCrw==";
        
        $urlEndPoint = "http://www.mysite.com/call_pay.jsp"; //Your return url end point. 
        print "Verifying return url signed using signature v2 ....\n";
        //return url is sent as a http GET request and hence we specify GET as the http method.
        //Signature verification does not require your secret key
        print "Is signature correct: " . $utils->validateRequest($params, $urlEndPoint, "GET") . "\n";
	}
}

Amazon_FPS_ReturnUrlVerificationSampleCode::test(); 
?>
