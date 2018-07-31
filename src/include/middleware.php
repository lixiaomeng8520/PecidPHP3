<?php 

$app->add(function ($request, $response, $next) {
    date_default_timezone_set('Asia/Shanghai');
    $start_time = microtime(true);
    $response = $next($request, $response);
    $end_time = microtime(true);
    var_dump($end_time - $start_time);
    return $response;
});

// $app->add(new \Slim\Middleware\Session([
//     'name' => 'dummy_session',
//     'autorefresh' => true,
//     'lifetime' => '10 seconds'
// ]));