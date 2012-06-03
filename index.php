<?php

require_once __DIR__.'/vendor/autoload.php';

///////////////
// Bootstrap //
///////////////
$app = new Silex\Application(); 

$app['debug'] = true;

include_once 'services.php';

//////////////////////////
// Routes / Controllers //
//////////////////////////

// mounting modules' controllers
$app->mount('/', new Xpto\Module\Controller());

// error handler
$app->error(function (\Exception $e, $code) use ($app) {
    if ($app['debug']) {
        return;
    }
    return $app->redirect("/{$code}");
});

// running the app
$app->run();