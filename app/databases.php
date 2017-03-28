<?php
/* Declaring sqlite database, this must be created manually or switched
 * to your working database. 
 *http://silex.sensiolabs.org/doc/providers/doctrine.html
 */
$app->register(new Silex\Provider\DoctrineServiceProvider(), array(
    'db.options' => array(
        'driver'   => 'pdo_sqlite',
        'path'     => __DIR__.'/app.db',
    ),
));

