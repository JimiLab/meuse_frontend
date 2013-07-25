<?php
    header('Access-Control-Allow-Origin: *');  
   /* 
    $curlSession = curl_init();
    curl_setopt($curlSession, CURLOPT_URL, $_GET["url"]);
    curl_setopt($curlSession, CURLOPT_BINARYTRANSFER, true);
    curl_setopt($curlSession, CURLOPT_RETURNTRANSFER, true);

    echo curl_exec($curlSession);
    curl_close($curlSession);
    */
    $url = $_GET["url"];
    //$xml = file_get_contents($url);
    // Get cURL resource
    $curl = curl_init();
    // Set some options - we are passing in a useragent too here
    curl_setopt_array($curl, array(
			    CURLOPT_RETURNTRANSFER => 1,
			    CURLOPT_URL => $url,
			    CURLOPT_USERAGENT => 'Meuse'
			    ));
    // Send the request & save response to $resp
    $resp = curl_exec($curl);
    // Close request to clear up some resources
    curl_close($curl);
    echo($resp);
?>
