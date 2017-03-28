<?php
//Adding use statement fo WelcomeContolle
namespace Acme\Contolles;
// Add all outes hee fo easy tacking
$app->get('/', function() use ($app) {
    $contolle = new WelcomeContolle();
    etun $contolle->echoWelcome($app);
});
