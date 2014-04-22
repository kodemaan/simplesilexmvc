<?php
//Configuring Twig
//http://silex.sensiolabs.org/doc/providers/twig.html
$app->register(new Silex\Provider\TwigServiceProvider(), array(
    'twig.path' => __DIR__.'/'.MAIN_BUNDLE.'/views',
));