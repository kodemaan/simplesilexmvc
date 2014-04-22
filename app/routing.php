<?php
//Adding use statement for WelcomeController
use Acme\Controllers\WelcomeController;
// Add all routes here for easy tracking
$app->get('/', function() {
    $controller = new WelcomeController();
    return $controller->echoWelcome();
});