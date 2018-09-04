<?php 

$settings = [
    'displayErrorDetails' => true,
    'logger' => [
        'path' => DATA_PATH . '/app.log'
    ],
    'db' => [
        'host' => 'localhost'
    ],
    'sqlserver' => [
        'host'=> '192.168.1.181',
        'user'=> 'trs',
        'pass'=> 'trs2006'
    ]
];

$container->get('settings')->replace($settings);