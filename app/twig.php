<?php
//Register views directory in your bundle (name of which is set in app.php)
$app->register(new Silex\Provider\TwigServiceProvider(), array(
    'twig.path' => __DIR__.'/../src/'.MAIN_BUNDLE.'/Views',
));
