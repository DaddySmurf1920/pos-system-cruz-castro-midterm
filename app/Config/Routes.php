<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('about', 'Pages::about');
$routes->get('customers', 'Customers::index');
$routes->get('users', 'Users::index');
$routes->get('customers/create', 'Customers::create');
$routes->post('customers/store', 'Customers::store');
$routes->get('products', 'Products::index');
$routes->get('products/create', 'Products::create');
$routes->post('products/store', 'Products::store');
$routes->get('login', 'Auth::login');
$routes->post('login/auth', 'Auth::attemptLogin');
$routes->get('register', 'Auth::register');
$routes->post('register/store', 'Auth::store');
$routes->get('logout', 'Auth::logout');
$routes->get('sales', 'Sales::index');
$routes->get('sales/create', 'Sales::create');
$routes->post('sales/store', 'Sales::store');