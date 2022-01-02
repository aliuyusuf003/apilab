<?php
$ch = curl_init();

$headers = [
    "Authorization: token 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",
    "User-Agent: APILAB"
];

curl_setopt_array($ch, [
    CURLOPT_URL => "https://api.github.com/user/starred/httpie/httpie", // check if a repo is starred.
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_HTTPHEADER => $headers,
    // CURLOPT_USERAGENT => "aliuyusuf003",
    // CURLOPT_HEADER => true // allows us to see the api response headers
]);

$response = curl_exec($ch); //payload

$status_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);



curl_close($ch);

echo $status_code, "\n";


echo $response, "\n";