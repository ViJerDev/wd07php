<?php
use App\User;
use Bramus\Router\Router;

// Create Router instance
$router = new Router();
$router = new Router();


// Define routes
$router->get('/', function() {
    echo 'main';
});
$router->get('/id', function() {
    echo 'main/id';
});

// Run it!
$router->run();
