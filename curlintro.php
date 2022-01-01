<?php

$ch = curl_init();

//curl_setopt($ch, CURLOPT_URL, "https://randomuser.me/api");
//curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);


// you can use array in curl
curl_setopt_array($ch, [
    CURLOPT_URL => "https://randomuser.me/api",
    CURLOPT_RETURNTRANSFER => true
]);

$response = curl_exec($ch);

curl_close($ch);

echo $response, "\n";