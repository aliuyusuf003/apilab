<?php
$api_key = "Your api key here";
$data = [
    "name" => 'Yusuf Aliu',
    "email" => 'devali@datapronigeria.net'
];

require __DIR__ .'/vendor/autoload.php';

$stripe =  new \Stripe\StripeClient($api_key);

$customer  = $stripe->customers->create($data);

echo $customer;