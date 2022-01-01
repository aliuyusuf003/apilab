<?php

// endpoint refers to urls/web address in api 
// api are used in programs not humans
// Api data are usually in json format

// Api keys is similar to username and password but for an api rather than human 
// how you use it depends on the api documentation 

// request headers are simple key value pairs that represents the metadata about your requests.


$ch = curl_init();

curl_setopt_array($ch, [

    CURLOPT_URL => "https://api.openweathermap.org/data/2.5/weather?q=London&appid=YOUR_API_KEY",
    CURLOPT_RETURNTRANSFER => true
]);

$response = curl_exec($ch); // this is the response payload

$status_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);// getting the status code of api response
// 200 --success 
// 404 --resource not found 
// 401 --authentication required 
// 403 --Access Forbidden 

// The response code tells us how the request not so we can process the request accordingly.


curl_close($ch);

echo $status_code, "\n";

echo $response, "\n";
