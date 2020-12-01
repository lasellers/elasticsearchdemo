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
                        'id' => '1',
                        'body' => ['name' => 'John Doe'],
                        'client' => [
                            'curl' => [CURLOPT_HTTPHEADER => array('Content-type: application/json')]
                        ]
                    ];
$response = $client->index($params);
print_r($response);

$params = [
    'index' => 'customer',
    'type' => '_doc',
    'id' => '2',
    'body' => ['name' => 'Jane Doe'],
    'client' => [
        'curl' => [CURLOPT_HTTPHEADER => array('Content-type: application/json')]
    ]
];
$response = $client->index($params);
print_r($response);

$params = [
    'index' => 'customer',
    'type' => '_doc',
    'id' => '3',
    'body' => ['name' => 'James William'],
    'client' => [
        'curl' => [CURLOPT_HTTPHEADER => array('Content-type: application/json')]
    ]
];
$response = $client->index($params);
print_r($response);

