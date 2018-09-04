<?php 
namespace PecidPHP\ErrorHandler;

class Base extends \Slim\Handlers\AbstractError {

    protected $container;

    public function __construct(\Psr\Container\ContainerInterface $container) {
        $this->container = $container;
    }

    public function __invoke(\Psr\Http\Message\ServerRequestInterface $request, \Psr\Http\Message\ResponseInterface $response, \Throwable $throwable)
    {
        $logger = $this->container->get('logger');
        $logger->addError($this->renderThrowableAsText($throwable));

        $response = $response->withStatus(500);

        $response->getBody()->write('internal error');

        return $response;
    }

    protected function renderThrowableAsText($throwable)
    {
        $text = sprintf('Type: %s' . PHP_EOL, get_class($throwable));

        if ($code = $throwable->getCode()) {
            $text .= sprintf('Code: %s' . PHP_EOL, $code);
        }

        if ($message = $throwable->getMessage()) {
            $text .= sprintf('Message: %s' . PHP_EOL, htmlentities($message));
        }

        if ($file = $throwable->getFile()) {
            $text .= sprintf('File: %s' . PHP_EOL, $file);
        }

        if ($line = $throwable->getLine()) {
            $text .= sprintf('Line: %s' . PHP_EOL, $line);
        }

        return $text;
    }
}
