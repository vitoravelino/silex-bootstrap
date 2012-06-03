<?php

namespace Xpto\Module;

use Silex\Application;
use Silex\ControllerProviderInterface;
use Silex\ControllerCollection;

class Controller implements ControllerProviderInterface
{
    public function connect(Application $app)
    {
        $controller = new ControllerCollection();
        $manager    = new Manager($app['db']);
        
        $controller->get('/', function (Application $app) {
            return $app['twig']->render("index.twig");
        });

        return $controller;
    }
}