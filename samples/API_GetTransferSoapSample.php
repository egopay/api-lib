<?php

require_once "../api/api.php";

$oAuth = new EgoPayAuth("YOUR ACCOUNT NAME", "YOUR API ID", "YOUR API PASSWORD");

$oSoapApiAgent = new EgoPaySoapApiAgent($oAuth);

try {      
    $aParams = array(
        'amount' => 5,
        'currency' => 'USD',
        'payeeEmail' => 'test@test.com',
        'details' => 'Sample transfer'
    );
    $oResponse = $oSoapApiAgent->getTransfer($aParams);
    var_dump($oResponse);    
} catch (EgoPayApiException $e) {
    echo $e->getCode().': '.$e->getMessage();
    exit;
}