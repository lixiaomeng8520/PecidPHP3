<?php 

$app->add(function ($request, $response, $next) {
    date_default_timezone_set('Asia/Shanghai');    
    $response = $next($request, $response);    
    return $response;
});

// $app->add(new \Slim\Middleware\Session([
//     'name' => 'dummy_session',
//     'autorefresh' => true,
//     'lifetime' => '10 seconds'
// ]));