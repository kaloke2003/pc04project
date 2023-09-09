<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
// $routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::index');

$routes->get('/home', 'Frontend::home');

$routes->get('/blog', 'Frontend::blog');

$routes->get('/about', 'Frontend::about');

$routes->get('/contact', 'Frontend::contact');

$routes->get('/checkout', 'Frontend::checkout');

$routes->get('/wishlist', 'Frontend::wishlist');

$routes->get('/account', 'Frontend::account');

$routes->get('/dashboard', 'Backend::index');

//product
$routes->get('/shop', 'Shop::shop');

//user
$routes->get('/user_manage', 'Backend::user_manage');
$routes->get('/user_add', 'Backend::user_add');
$routes->get('/user_edit/(:num)', 'Backend::user_add/$1');
$routes->get('/user_del/(:num)', 'Backend::user_del/$1');
$routes->post('/user_submit', 'Backend::user_submit');

//product
$routes->get('/product_manage', 'Backend::product_manage');
$routes->get('/product_add', 'Backend::product_add');
$routes->get('/product_edit/(:num)', 'Backend::product_add/$1');
$routes->get('/product_del/(:num)', 'Backend::product_del/$1');
$routes->post('/product_submit', 'Backend::product_submit');

//Login/register
$routes->get('/login', 'Login::login');
$routes->post('/login_submit', 'Login::login_submit');
$routes->get('/login_thanks', 'Login::login_thanks');
$routes->post('/register_submit', 'Login::register_submit');
$routes->get('/register_thanks', 'Login::register_thanks');
$routes->get('/logout', 'Login::logout');

//admin






/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
