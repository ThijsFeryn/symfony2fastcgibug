<?php
namespace Test;

use Silex\Application;
use Silex\ServiceProviderInterface;

class Provider implements ServiceProviderInterface
{
    public function register(Application $app)
    {


        $app['mailer'] = $app->share(function ($app) {
                return "test123";
        });


    public function boot(Application $app)
    {
         $app->finish(function () use ($app) {
                echo "Finished the test <br />".PHP_EOL;
        });
    }
}
