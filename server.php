<?php

use App\Server;
use Psr\Log\NullLogger;
use React\Cache\ArrayCache;
use React\EventLoop\Factory;
use React\Http\Server as ReactHttpServer;
use React\Socket\Server as ReactSocketServer;
use WyriHaximus\React\Http\Middleware\WebrootPreloadMiddleware;

require 'vendor/autoload.php';

define('ROOT_DIR', __DIR__ . '/');
define('CONTROLLER_NAMESPACE', 'App\\Controller\\');

$loop = Factory::create();

$socket = new ReactSocketServer(8080, $loop);
$server = new ReactHttpServer(
    $loop,
    new WebrootPreloadMiddleware('public', new NullLogger(), new ArrayCache()),
    new Server(),
);

$server->on('error', function (Throwable $exception){
    echo($exception);
});

$server->listen($socket);

echo "Server running at http://127.0.0.1:8080\n";

$loop->run();