<?php
namespace Acme\Controllers;

use Silex\Application;
class WelcomeController {

	public function echoWelcome(Application $app) {
           return $app['twig']->render('welcome/index.html.twig');
	}
}
