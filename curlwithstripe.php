<?php
$api_key = "YOUR API KEY HERE";
$data = [
    "name" => 'DataPro Aliu',
    "email" => 'yusufgenius03@datapronigeria.net'
];

$ch = curl_init();

curl_setopt_array($ch, [
    CURLOPT_URL => "https://api.stripe.com/v1/customers",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_USERPWD => $api_key,
    CURLOPT_POSTFIELDS => http_build_query($data)
]);

$response = curl_exec($ch);

curl_close($ch);

echo $response;


