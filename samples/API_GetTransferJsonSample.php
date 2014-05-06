<?php

require_once "../api/api.php";

$oAuth = new EgoPayAuth("YOUR ACCOUNT NAME", "YOUR API ID", "YOUR API PASSWORD");

$oJsonApiAgent = new EgoPayJsonApiAgent($oAuth);

try {      
    $oResponse = $oJsonApiAgent->getTransfer(
            'test@test.com', 
            10, 
            'USD', 
            'Sample transfer');
    var_dump($oResponse);    
} catch (EgoPayApiException $e) {
    echo $e->getCode().': '.$e->getMessage();
    exit;
}
