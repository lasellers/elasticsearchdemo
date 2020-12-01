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
    'body' => [
        'query' => [
            'match' => [
                'name' => 'John Doe',
            ]
        ]
    ],
    'client' => [
        'curl' => [CURLOPT_HTTPHEADER => array('Content-type: application/json')]
    ]
];
$response = $client->search($params);
print_r($response);

