<?php
use Cake\Http\MiddlewareQueue\CsrfProtectionMiddleware;
use Cake\Routing\Route\DashedRoute;
use Cake\Routing\RouteBuilder;
use Cake\Routing\Router;

return static function (RouteBuilder $routes) {
    $routes->setRouteClass(DashedRoute::class);

    $routes->scope('/', function (RouteBuilder $builder) {
        $builder->connect('/', ['controller' => 'Pages', 'action' => 'home']);
        $builder->connect('/pages/*', 'Pages::display');
        $builder->fallbacks();
    });

    Router::prefix('Admin', function (RouteBuilder $routes) {
        $routes->connect('/', ['controller' => 'Users', 'action' => 'index']);
        $routes->connect('/admins/logout', ['controller' => 'Admins', 'action' => 'logout']);
        $routes->fallbacks(DashedRoute::class);
    });

     Router::prefix('User', function (RouteBuilder $routes) {
        $routes->connect('/', ['controller' => 'Students', 'action' => 'index']);
        $routes->connect('/users/logout', ['controller' => 'Users', 'action' => 'logout']);
        $routes->fallbacks(DashedRoute::class);
    });
};
