<?php 
namespace PecidPHP\ErrorHandler;

class Base extends \Slim\Handlers\AbstractError {

    protected $container;

    public function __construct(\Psr\Container\ContainerInterface $container) {
        $this->container = $container;
    }
}
