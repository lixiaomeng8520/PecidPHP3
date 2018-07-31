<?php 

$settings = [
    'displayErrorDetails' => true,
    'logger' => [
        'path' => DATA_PATH . '/app.log'
    ],
    'db' => [
        'host' => 'localhost'
    ]
];

$container->get('settings')->replace($settings);