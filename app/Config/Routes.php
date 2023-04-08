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
//VIEW
$routes->get('/','Home::index');
$routes->get('/dosen','dosen::index');
$routes->get('/mahasiswa','mahasiswa::index');
$routes->get('/admin','admin::index');
//EDIT VIEW
$routes->post('/dosen/edit','dosen::edit/$1');
$routes->post('/mahasiswa/edit','mahasiswa::edit/$1');
$routes->post('/admin/edit','admin::edit/$1');
//UPDATE VIEW
$routes->get('/dosen/update/(:num)','dosen::update/$1');
$routes->get('/mahasiswa/update/(:num)','mahasiswa::update/$1');
$routes->get('/admin/update/(:num)','admin::update/$1');
//INSERT VIEW
$routes->add('/dosen/input','dosen::input');
$routes->add('/mahasiswa/input','mahasiswa::input');
$routes->add('/admin/input','admin::input');
//INSERT
$routes->post('/dosen/insert','dosen::insert');
$routes->post('/mahasiswa/insert','mahasiswa::insert');
$routes->post('/admin/insert','admin::insert');
//DELETE
$routes->add('/dosen/delete/(:num)','dosen::delete/$1');
$routes->add('/mahasiswa/delete/(:num)','mahasiswa::delete/$1');
$routes->add('/admin/delete/(:num)','admin::delete/$1');
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
