<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

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
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::index');
$routes->get('registrasi', 'Home::regis');
$routes->get('login', 'Home::login');
$routes->post('cek', 'SewaController::cek');
// join
$routes->get('sewa/info', 'sewaController::info');
$routes->get('sewa/info2', 'sewaController::info2');
// route barang
    $routes->get('barang', 'BarangController::index');
    $routes->get('barang/tambah', 'BarangController::tambah');
    $routes->add('barang/tambah_barang', 'BarangController::tambah_barang');
    $routes->get('barang/edit/(:num)', 'BarangController::edit/$1');
    $routes->add('barang/update/(:num)', 'BarangController::update/$1');
    $routes->get('barang/hapus/(:num)', 'BarangController::hapus/$1');
// akhir route barang
// route user
$routes->get('user', 'userController::index');
$routes->get('user/tambah', 'userController::tambah');
$routes->post('user/tambah_user', 'userController::tambah_user');
$routes->get('user/edit/(:num)', 'userController::edit/$1');
$routes->post('user/update/(:num)', 'userController::update/$1');
$routes->get('user/hapus/(:num)', 'userController::hapus/$1');
// akhir route user
// route sewa
$routes->get('sewa', 'sewaController::index');
$routes->get('sewa/tambah', 'sewaController::tambah');
$routes->post('sewa/tambah_sewa', 'sewaController::tambah_sewa');
$routes->get('sewa/edit/(:num)', 'sewaController::edit/$1');
$routes->post('sewa/update/(:num)', 'sewaController::update/$1');
$routes->get('sewa/hapus/(:num)', 'sewaController::hapus/$1');
// akhir route sewa

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
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
