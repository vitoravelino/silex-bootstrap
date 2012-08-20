<?php

namespace Xpto\Module;

use Silex\Application;
use Silex\ControllerProviderInterface;

class Controller implements ControllerProviderInterface
{
    public function connect(Application $app)
    {
        $controller = $app['controllers_factory'];
        $manager    = new Manager($app['db']);
        
        $controller->get('/', function (Application $app) {
            return $app->render("index.twig");
        });

        return $controller;
    }
}