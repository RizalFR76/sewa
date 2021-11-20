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
// route barang
    $routes->get('barang', 'barangController::index');
    $routes->get('barang/tambah', 'barangController::tambah');
    $routes->get('barang/tambah_barang', 'barangController::tambah_barang');
    $routes->get('barang/edit', 'barangController::edit');
    $routes->get('barang/update', 'barangController::update');
    $routes->get('barang/hapus', 'barangController::hapus');
// akhir route barang
// route user
$routes->get('user', 'userController::index');
$routes->get('user/tambah', 'userController::tambah');
$routes->get('user/tambah_user', 'userController::tambah_user');
$routes->get('user/edit', 'userController::edit');
$routes->get('user/update', 'userController::update');
$routes->get('user/hapus', 'userController::hapus');
// akhir route user
// route sewa
$routes->get('sewa', 'sewaController::index');
$routes->get('sewa/tambah', 'sewaController::tambah');
$routes->get('sewa/tambah_sewa', 'sewaController::tambah_sewa');
$routes->get('sewa/edit', 'sewaController::edit');
$routes->get('sewa/update', 'sewaController::update');
$routes->get('sewa/hapus', 'sewaController::hapus');
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
