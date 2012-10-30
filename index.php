<?php

require_once __DIR__.'/vendor/autoload.php';
require_once __DIR__.'/test.php';
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Test\Provider;

$app = new Silex\Application();
$app->register(new Provider());
$app->get('/', function() use ($app) {
        return new Response($app['test']);
});
return $app->run();
