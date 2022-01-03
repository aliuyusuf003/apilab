<?php

require __DIR__ . "/vendor/autoload.php";

$client = new GuzzleHttp\Client;

$response = $client->request("GET", "https://api.github.com/user/repos", [
    "headers" => [
        "Authorization" => "token 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",
        "User-Agent" => "aliuyusuf003"
    ]
]);

echo $response->getStatusCode(), "\n";

echo $response->getHeader("content-type")[0], "\n";

echo substr($response->getBody(), 0, 200), "...\n";// get first 200 characters