<?php 

use project\Http\Route;
use project\Http\Request;
use project\Http\Response;

require_once __DIR__ .'/../vendor/autoload.php';

require_once __DIR__ .'/../routes/web.php';

// dump(Route::$routes);
// var_dump(Route::$routes['get']['/']);

// var_dump(Route::$routes['get']['/']());
// print_r($_SERVER);

$route = new Route(new Request, new Response);

dump($route->request->method());
dump($route->request->path());


