<?php

use Doctrine\Common\Annotations\AnnotationRegistry;
use Composer\Autoload\ClassLoader;

/**
 * @var ClassLoader $loader
 */
// $loader = require __DIR__.'/../vendor/autoload.php';
//$loader = require '/home/calwest/calwest/vendor/autoload.php';
$loader = require '/home/vagrant/calwest/vendor/autoload.php';

AnnotationRegistry::registerLoader(array($loader, 'loadClass'));

return $loader;
