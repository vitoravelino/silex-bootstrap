<?php

// twig
$app->register(new Silex\Provider\TwigServiceProvider(), array(
    'twig.path'       => __DIR__ . '/views',
));

// monolog
$app->register(new Silex\Provider\MonologServiceProvider(), array(
    'monolog.logfile' => __DIR__.'/logs/development.log',
));

// session
$app->register(new Silex\Provider\SessionServiceProvider());

// dbal
$app->register(new Silex\Provider\DoctrineServiceProvider(), array(
    'db.options'    => array(
        'driver'    => 'pdo_mysql',
        'host'      => 'localhost',
        'dbname'    => 'dbname',
        'user'      => 'root',
        'password'  => 'root',
        'charset'   => 'utf-8',
    )
));