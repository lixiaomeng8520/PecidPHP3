<?php 
namespace PecidPHP\Controller;

class BaseController {

    protected $container;

    public function __construct(\Psr\Container\ContainerInterface $container) {
        $this->container = $container;
    }

}
