<?php

require '../vendor/autoload.php';

$container = new Atom\Container\Container(require '../config/main.php');
$container->register(new Atom\AppServiceProvider());

($app = new Atom\App($container))
    ->getRouter()
    ->mount(require '../routes.php');
$app->run();
