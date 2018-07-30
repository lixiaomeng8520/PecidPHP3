<?php 

$container['session'] = function ($c) {
    return new \SlimSession\Helper;
};

$container['db'] = function ($c) {
    $db = new \Aura\Sql\ExtendedPdo('mysql:host=127.0.0.1;dbname=test', 'root1', '');
    return $db;
};