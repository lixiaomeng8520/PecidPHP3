<?php 
/*-errorHandler-*/
// $container['errorHandler'] = function ($c) {
//     return new \PecidPHP\ErrorHandler\Error($c);
// };
// $container['notFoundHandler'] = function ($c) {
//     return new \PecidPHP\ErrorHandler\NotFound($c);
// };
// $container['notAllowedHandler'] = function ($c) {
//     return new \PecidPHP\ErrorHandler\NotAllowed($c);
// };
// $container['phpErrorHandler'] = function ($c) {
//     return new \PecidPHP\ErrorHandler\PhpError($c);
// };


/*-logger-*/
$container['logger'] = function($c) {
    $logger = new \Monolog\Logger('app');
    $file_handler = new \Monolog\Handler\StreamHandler($c->get('settings')['logger']['path']);
    $logger->pushHandler($file_handler);
    return $logger;
};


/*-session-*/
$container['session'] = function ($c) {
    $session_factory = new \Aura\Session\SessionFactory;
    $session = $session_factory->newInstance($_COOKIE);
    $session->setName('sid');
    return $session;
};
$container['segment'] = function ($c) {
    $session = $c->get('session');
    $segment = $session->getSegment('PecidPHP3');
    return $segment;
};


/*-db-*/
$container['db'] = function ($c) {
    $db = new \Aura\Sql\ExtendedPdo('mysql:host=127.0.0.1;dbname=test', 'root1', '');
    return $db;
};

$container['sqlserver'] = function($c) {
    $config = $c->get('settings')['sqlserver'];
    $db = new \Aura\Sql\ExtendedPdo('dblib:host='.$config['host'].';dbname=TRSWCM', $config['user'], $config['pass']);
    // var_dump($db);
    return $db;
};