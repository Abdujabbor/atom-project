<?php

return function (Atom\Router\Router $router) {
    return $router->get(['home' => '/'], function () {
        return $this->view->render('index', ['content' => 'Hello World!']);
    });
};
