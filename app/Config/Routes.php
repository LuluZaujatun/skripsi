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
$routes->get('/pages', 'Pages::index');
//$routes->get('/auth', 'Auth::login');
$routes->get('/Admin', function () {
    return redirect()->to('Admin/Dashboard');
});

$routes->post('latihan4', 'Latihan::latihan4');
//$routes->post('submit6', 'Latihan::aksi6');
$routes->get('latihan6', 'Latihan::tugas6');

//LOGIN
$routes->get('/', 'Auth::login');
$routes->get('login', 'Auth::login');
$routes->post('/proses', 'Auth::proses');
$routes->get('/forgot', 'Auth::forgot');
$routes->post('/send', 'Auth::send');
$routes->get('logout', 'Auth::logout');

//REGIS USER
$routes->get('/register', 'Pages::register');
$routes->post('/regisSave', 'Pages::regisSave');

//USER
$routes->get('user', 'Pages::user');
$routes->get('edit-user/(:num)', 'Pages::editUser/$1');
$routes->post('updateUser', 'Pages::updateUser');
$routes->get('delete-user/(:num)', 'Pages::deleteUser/$1');

//GENERATE
$routes->get('pdfView', 'Pdf::pdfView');
$routes->get('generate', 'Pdf::generate');
$routes->get('generateSls', 'Pdf::generateSls');
$routes->get('generateSpv', 'Pdf::generateSpv');

//SALES ORDER
$routes->get('table-so', 'Pages::sales_order');
$routes->get('detail-cust/(:num)', 'Pages::detail/$1');
$routes->get('edit-so/(:num)', 'Pages::singleSo/$1');
$routes->post('progress-so', 'Pages::progress');

//CUSTOMER SALES
$routes->post('submit-custSales', 'Sales::saveCustSales');
$routes->get('table-custSales', 'Sales::custSales');
$routes->get('edit-cs/(:num)', 'Sales::singleCs/$1');
$routes->post('update-cs', 'Sales::updateCs');

//CUSTOMER BGES
$routes->post('submit-cust', 'Pages::saveCust');
$routes->get('table-cust', 'Pages::customers');
$routes->get('edit-cust/(:num)', 'Pages::singleCust/$1');
$routes->post('update-cust', 'Pages::updateCust');
$routes->get('delete-cust/(:num)', 'Pages::deleteCust/$1');

//DATA SALES
$routes->post('submit-form', 'Pages::add_aksi');
$routes->get('table-sales', 'Pages::data_sales');
$routes->get('edit-view/(:num)', 'Pages::singleData/$1');
$routes->post('update', 'Pages::updatedata');
$routes->get('delete/(:num)', 'Pages::delete/$1');

//SETTING
$routes->get('setting', 'Pages::setting');
$routes->get('edit-point/(:num)', 'Pages::editPoint/$1');
$routes->post('updatePoint', 'Pages::updatePoint');

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
