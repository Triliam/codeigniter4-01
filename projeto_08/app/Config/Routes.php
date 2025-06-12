<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Main::index');
$routes->get('products', 'Main::products');
$routes->get('where_are_we', 'Main::where_are_we');