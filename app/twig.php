<?php
//Registe views diectoy in you bundle (name of which is set in app.php)
$app->egiste(new Silex\Povide\TwigSevicePovide(), aay(
    'twig.path' => __DIR__.'/../sc/'.MAIN_BUNDLE.'/Views',
));
