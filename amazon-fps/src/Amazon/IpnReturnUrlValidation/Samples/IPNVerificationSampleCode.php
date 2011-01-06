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
  
class Amazon_FPS_IPNVerificationSampleCode {

	public static function test() {
		
        $utils = new Amazon_FPS_SignatureUtilsForOutbound();
        
        //Parameters present in ipn.
        $params["transactionId"] = "14DRG2JGR7LK4J54P544DKKNDLQFFZLE323";
        $params["transactionDate"] = "1251832057";
        $params["status"] = "INITIATED";
        $params["notificationType"] = "TransactionStatus";
        $params["callerReference"] = "callerReference=ReferenceStringJYI1251832057319108";
        $params["operation"] = "PAY";
        $params["transactionAmount"] = "USD 1.00";
        $params["buyerName"] = "BuyerName-SsUo3oDjHx";
        $params["paymentMethod"] = "CC";
        $params["paymentReason"] = "DescriptionString-1251832057319108";
        $params["recipientEmail"] = "recipientemail@amazon.com";
        $params["signatureMethod"] = "RSA-SHA1";
        $params["signatureVersion"] = "2";
        $params["certificateUrl"] = "https://fps.amazonaws.com/certs/090909/PKICert.pem";
        $params["signature"] = "vKXXCbtxvSkRR+Zn8YNW6DNGpbi474h2iM4L+xaOi16kYKdYpuGbvKyXQ36uTZTVHdUGAAcvpXFL"
                . "wDfnTcqcckr2IUElrVJKQeT0WeWR+IqmABwSRGo+YqjzPNISSNXNzg6LFhouhUvmmwY15X3YgXfc"
                . "ERN5IhPwv04YkyCLPCA9P0/QgD8Jum/hc9jj0HYjj3s3MuuQ3yoIhf2x+2CBZRm5lslRqnoF/8OJ"
                . "1ZHmAHt9VvQSZ+QC3fwJgeqzJPAvtuOm930BP6hPYZVhXE5w7ByLt0qLk1ZFE/vzQ4io4vOyie6W"
                . "bhp5+AuNyAs+QrGMYO8VZruZJfkZO4b6QOgV2A==";

        $urlEndPoint = "http://www.mysite.com/ipn.jsp"; //Your url end point receiving the ipn.
         
        print "Verifying IPN signed using signature v2 ....\n";
        //IPN is sent as a http POST request and hence we specify POST as the http method.
        //Signature verification does not require your secret key
        print "Is signature correct: " . $utils->validateRequest($params, $urlEndPoint, "POST") . "\n";
	}
}

Amazon_FPS_IPNVerificationSampleCode::test(); 
?>
