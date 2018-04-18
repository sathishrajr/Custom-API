<?php

/**
 * DCKAP_Customapi - Version 1.0.0
 * Copyright (c) 2017 DCKAP.All Right Reserved.
 * Author: DCKAP <extensions@dckap.com>
 * Website: https://www.dckap.com
 * license    http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */

error_reporting(E_ALL);
ini_set('display_errors', 1);

require('vendor/zendframework/zend-server/src/Client.php');
require('vendor/zendframework/zend-soap/src/Client.php');
require('vendor/zendframework/zend-soap/src/Client/Common.php');
// wsdl Url
$wsdlurl = 'http://127.0.0.1/magento2/soap/default?wsdl&services=dckapCustomapiV1';

$opts = ['http' => ['header' => "Authorization: Bearer "]];
$context = stream_context_create($opts);

$soapClient = new \Zend\Soap\Client($wsdlurl);
$soapClient->setSoapVersion(SOAP_1_2);
$soapClient->setStreamContext($context);
$result = $soapClient->dckapCustomapiV1Name(array("name"=>"DCKAP"));

echo "<pre>"; print_r($result); 
?>