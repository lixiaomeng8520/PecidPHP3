<?php 

$settings = [
    'displayErrorDetails' => true,
    'db' => [
        'host' => 'localhost'
    ]
];

$container->get('settings')->replace($settings);