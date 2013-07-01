<?php
    header('Access-Control-Allow-Origin: *');  
    
    $curlSession = curl_init();
    curl_setopt($curlSession, CURLOPT_URL, $_GET["url"]);
    curl_setopt($curlSession, CURLOPT_BINARYTRANSFER, true);
    curl_setopt($curlSession, CURLOPT_RETURNTRANSFER, true);

    echo curl_exec($curlSession);
    curl_close($curlSession);
?>