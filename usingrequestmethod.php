<?php
$ch = curl_init();

$headers = [
    "Authorization: token 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",
    // "User-Agent: APILAB"
];

curl_setopt_array($ch, [
    CURLOPT_URL => "https://api.github.com/user/starred/httpie/httpie", // check if a repo is starred.
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_HTTPHEADER => $headers,
    CURLOPT_CUSTOMREQUEST => "DELETE",
    CURLOPT_USERAGENT => "aliuyusuf003", // or APP NAME
    // CURLOPT_HEADER => true // allows us to see the api response headers
]);

$response = curl_exec($ch); //payload or response body

$status_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);



curl_close($ch);

echo $status_code, "\n";


echo $response, "\n";