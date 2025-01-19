<?php

declare(strict_types=1);

require_once __DIR__ . '/../vendor/autoload.php';

use Cookie\Routers\Router;
use Cookie\Controllers\HomeController;

$router = new Router();


// Define all routes
$router->get('/', [HomeController::class, 'index']);

echo $router->resolve();