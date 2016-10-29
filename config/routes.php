<?php
use Cake\Routing\RouteBuilder;
use Cake\Routing\Router;
use Cake\Routing\Route\DashedRoute;

Router::plugin(
    'KingLoui/BaseKit',
    ['path' => '/basekit'],
    function (RouteBuilder $routes) {
        $routes->fallbacks(DashedRoute::class);
    }
);

Router::prefix('admin', function ($routes) {

    $routes->connect('/', 
        [ 'prefix' => 'admin','plugin' => 'KingLoui/BaseKit', 'controller' => 'Pages', 'action' => 'display', 'dashboard']
    );
    $routes->connect('/pages/*', 
        ['prefix' => 'admin','plugin' => 'KingLoui/BaseKit', 'controller' => 'Pages', 'action' => 'display']
    );

    $routes->connect('/config', 
        ['prefix' => 'admin','plugin' => 'KingLoui/BaseKit', 'controller' => 'Configurations', 'action' => 'index']
    );
    $routes->connect('/config/:action/*', 
        ['prefix' => 'admin','plugin' => 'KingLoui/BaseKit', 'controller' => 'Configurations']
    );

    $routes->fallbacks(DashedRoute::class);
});
