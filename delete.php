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
    'id' => '3'
];

$response = $client->delete($params);
print_r($response);

