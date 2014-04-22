<?php
//Define SRC directory with your bundle
define('SRCDIR',__DIR__.'/../src/');

//Autoload fundtion for PSR-0 standard
//Taken from http://www.sitepoint.com/autoloading-and-the-psr-0-standard/
//Made minor tweak to not fail if file doesn't exist
function autoload($className)
{
    $className = ltrim($className, '\\');
    $fileName  = '';
    $namespace = '';
    if ($lastNsPos = strripos($className, '\\')) {
        $namespace = substr($className, 0, $lastNsPos);
        $className = substr($className, $lastNsPos + 1);
        $fileName  = str_replace('\\', DIRECTORY_SEPARATOR, $namespace) . DIRECTORY_SEPARATOR;
    }
    $fileName .= str_replace('_', DIRECTORY_SEPARATOR, $className) . '.php';
    //My tweak that I made
    if (is_readable($fileName))
    {
	    require $fileName;
    }
}
spl_autoload_register('autoload');