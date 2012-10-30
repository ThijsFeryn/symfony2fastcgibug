<?php

require_once __DIR__.'/vendor/autoload.php';

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Silex\Provider\TestServiceProvider;

$app = new Silex\Application();
$app->register(new TestServiceProvider());
$app->get('/', function() use ($app) {
        return new Response($app['test']);
});
return $app->run();
