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

//new routes..

//...

$routes->match(['get', 'post'], 'login', 'UserController::login', ["filter" => "noauth"]);

// Super Admin routes
$routes->group("superadmin", ["filter" => "auth"], function ($routes) {
    $routes->get("/", "SuperAdminController::index");
});

// Admin routes
$routes->group("admin", ["filter" => "auth"], function ($routes) {
    $routes->get("/", "AdminController::index");

// Add Admin module....
$routes->get('addnew', 'AddUserController::add');
$routes->post('adminstore', 'AddUserController::index');


});
// User routes
$routes->group("user", ["filter" => "auth"], function ($routes) {
    $routes->get("/", "EditorController::index");
});
$routes->post('userupdate', 'EditorController::updateDetails');

// Logout module
$routes->get('logout', 'UserController::logout');

//... Add Module..
$routes->get('add', 'AddNewUserController::add');
$routes->post('store', 'AddNewUserController::index');



// Delete Module
$routes->get('delete/(:num)', 'DeleteUserController::delete/$1');

// Edit Module...
$routes->get('edit/(:num)', 'EditUserController::edit/$1');
$routes->post('update/(:num)', 'EditUserController::update/$1');


// Register
$routes->get('register', 'RegisterController::index');
$routes->post('store', 'RegisterController::register');


// Admin Aprooval route..
// $routes->get('adminaproove', 'AdminAproovalController::pendingUsers');
$routes->group("adminaproove", ["filter" => "auth"], function ($routes) {
    $routes->get("/", "AdminAproovalController::pendingUsers");
});
$routes->get('approve-user/(:num)', 'AdminAproovalController::approveUser/$1');









