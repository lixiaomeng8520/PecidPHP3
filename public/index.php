<?php 
use \Slim\App;

define('PUBLIC_PATH', __DIR__);
define('ROOT_PATH', dirname(PUBLIC_PATH));
define('VENDOR_PATH', ROOT_PATH . '/vendor');
define('SRC_PATH', ROOT_PATH . '/src');
define('INCLUDE_PATH', SRC_PATH . '/include');
define('CONTROLLER_PATH', SRC_PATH . '/Controller');

require VENDOR_PATH . '/autoload.php';

$app = new App();

$container = $app->getContainer();

require INCLUDE_PATH . '/setting.php';

require INCLUDE_PATH . '/dependencie.php';

require INCLUDE_PATH . '/middleware.php';

require INCLUDE_PATH . '/route.php';

$app->run();