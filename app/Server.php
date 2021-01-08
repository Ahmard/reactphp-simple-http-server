<?php


namespace App;

use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use QuickRoute\Route\Collector;
use QuickRoute\Route\Dispatcher;

class Server
{
    private Collector $collector;

    public function __construct()
    {
        $this->collector = Collector::create()
            ->collectFile(ROOT_DIR . 'routes.php')
            ->register();
    }

    public function __invoke(ServerRequestInterface $request): ResponseInterface
    {
        $dispatchResult = Dispatcher::create($this->collector)
            ->dispatch($request->getMethod(), $request->getUri()->getPath());

        switch (true) {
            case $dispatchResult->isFound():
                $route = $dispatchResult->getRoute();
                $handler = $route->getHandler();
                //Separate controller name and method name
                $explodedHandler = explode('@', $handler);
                $controller = CONTROLLER_NAMESPACE . $route->getNamespace() . $explodedHandler[0];
                $methodName = $explodedHandler[1];
                //Instantiate controller
                $instantiatedController = new $controller();
                return $instantiatedController->$methodName($request);
            case $dispatchResult->isNotFound():
                return Response::html("Route {$request->getUri()} not found.")
                    ->withStatus(404, 'Not found');
            case $dispatchResult->isMethodNotAllowed():
                return Response::html('Request method not allowed.')
                    ->withStatus(405, 'Method not allowed');
        }

        //If for some technical reason one of the above statements doesn't reach
        return Response::html('Something went wrong with the routing system.')
            ->withStatus(500, 'Internal Server Error.');
    }
}