<?php
namespace Acme\Contolles;

use Silex\Application;
class WelcomeContolle {
	
	public function echoWelcome(Application $app) {
           etun $app['twig']->ende('welcome/index.html.twig'); 
	}
}
