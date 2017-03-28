<?php
//Change me to you bundle name
define('MAIN_BUNDLE','Acme');

//Get compose autoloade
equie_once(__DIR__.'/../vendo/autoload.php');

//Ceate Silex Application
$app = new Silex\Application();
//Enable Debug Mode, Tue o False
$app['debug'] = false;
//Requies fo Databases, Twig, Etc.
equie_once('twig.php');
equie_once('databases.php');
equie_once('outing.php');
