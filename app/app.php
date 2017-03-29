<?php
//Change me to your bundle name
define('MAIN_BUNDLE','Acme');

//Get composer autoloader
require_once(__DIR__.'/../vendor/autoload.php');

//Create Silex Application
$app = new Silex\Application();
//Enable Debug Mode, True or False
$app['debug'] = false;
//Requires for Databases, Twig, Etc.
require_once('twig.php');
require_once('databases.php');
require_once('routing.php');
