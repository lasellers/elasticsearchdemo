<?php
require 'vendor/autoload.php';

$hosts = [
     'http://localhost:9200',
   //  'http://localhost:9200',
   //  'http://localhost:9200',
];

$client = Elasticsearch\ClientBuilder::create()
                    ->setHosts($hosts)
                    ->build();

$params = [
    'index' => 'customer',
    'type' => '_doc',
    'id' => '1'
];
$response = $client->get($params);
print_r($response);

$params = [
    'index' => 'customer',
    'type' => '_doc',
    'id' => '2'
];
$response = $client->get($params);
print_r($response);

