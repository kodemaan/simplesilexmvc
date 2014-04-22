<?php
//Declaring sqlite database
// http://silex.sensiolabs.org/doc/providers/doctrine.html
$app->register(new Silex\Provider\DoctrineServiceProvider(), array(
    'db.options' => array(
        'driver'   => 'pdo_sqlite',
        'path'     => __DIR__.'/app.db',
    ),
));