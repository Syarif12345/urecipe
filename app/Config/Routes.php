<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();


$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

$routes->get('/', 'Home::index');
$routes->get('/', 'Home::login');
$routes->get('/register', 'Register::index');
$routes->post('/register/process', 'Register::process');
$routes->get('home/login_view', 'Login::index');
$routes->post('/login/process', 'Login::process');
$routes->get('/logout', 'Login::logout'); 
$routes->get('/admin/index', 'Admin::index');




if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
