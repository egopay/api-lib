<?php

require_once "../api/api.php";

$oAuth = new EgoPayAuth("YOUR ACCOUNT NAME", "YOUR API ID", "YOUR API PASSWORD");

$oSoapApiAgent = new EgoPaySoapApiAgent($oAuth);

try {      
    $oResponse = $oSoapApiAgent->getHistory();
    var_dump($oResponse);    
} catch (EgoPayApiException $e) {
    echo $e->getCode().': '.$e->getMessage();
    exit;
}