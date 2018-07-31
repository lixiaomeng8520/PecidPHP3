<?php 
namespace PecidPHP\ErrorHandler;

class Base extends \Slim\Handlers\AbstractError {

    public function __invoke(\Psr\Http\Message\ServerRequestInterface $request, \Psr\Http\Message\ResponseInterface $response, \Throwable $error) {
        return $response;
    }

}
