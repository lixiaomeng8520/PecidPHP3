<?php 
namespace PecidPHP\ErrorHandler;

class PhpError extends Base {

    public function __invoke(\Psr\Http\Message\ServerRequestInterface $request, \Psr\Http\Message\ResponseInterface $response, \Throwable $throwable) {
        $logger = $this->container->get('logger');
        $logger->addError($this->renderThrowableAsText($throwable));

        $response = $response->withStatus(500);

        $response->getBody()->write('internal error');

        return $response;
    }

}
