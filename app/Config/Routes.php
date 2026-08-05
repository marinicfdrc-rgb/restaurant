<?php

use CodeIgniter\Router\RouteCollection;

/** @var RouteCollection $routes */
$routes->get('/', 'Home::index');

$routes->group('admin', function($routes){

    $routes->get('menu', 'Menu::index');

    $routes->get('menu/create', 'Menu::create');

    $routes->post('menu/store', 'Menu::store');

    $routes->get('menu/delete/(:num)', 'Menu::delete/$1');

});

$routes->post('signup','Auth::signup');

$routes->post('login','Auth::login');

$routes->post('logout','Auth::logout');

$routes->get('test-session', function(){

    session()->set('test','hello');

    return session()->get('test');

});

$routes->get('session', 'Auth::session');

$routes->post(
    'reservation/create',
    'Reservation::create'
);

$routes->get(
    'reservation/menu',
    'Home::reservationMenu'
);