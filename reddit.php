<?php

require 'vendor/autoload.php';

use GuzzleHttp\Client;

$client = new Client([
    'base_uri' => 'https://www.reddit.com/',
    'verify' => false, // Disable SSL certificate verification
]);

$response = $client->get('r/FlutterDev/hot.json');

echo $response->getBody();
