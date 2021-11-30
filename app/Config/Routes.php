<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php'))
{
	require SYSTEMPATH . 'Config/Routes.php';
}

/**
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
$routes->get('/', function () {
	$data = [
		'title' => "Blog - Home"
	];
    echo view ('/home/index');
    
});

$routes->get('/home','Home::index');
$routes->get('/home/suratmasukuser','UserSuratMasukController::index');
$routes->get('/home/suratmasukuser/create', 'UserSuratMasukController::create');
$routes->post('/home/suratmasukuser/store', 'UserSuratMasukController::store');
$routes->get('/login','login::index');
$routes->get('/logout','login::logout');

$routes->get('/register','templating::register');
$routes->post('/saveRegister','templating::saveRegister');
$routes->get('/about', function (){
	$data = [
		'title' => "Tentang Kami"
	];
	
    echo view ('v_about');
    
});
$routes->get('/admin', 'AdminController::index');
$routes->get('/admin/suratmasuk', 'AdminSuratMasukController::index');
$routes->get('/admin/suratmasuknonvalid', 'AdminSuratMasukController::index_nonvalid');
$routes->get('/admin/suratmasuk/create', 'AdminSuratMasukController::create');
$routes->get('/admin/suratmasuk/edit/(:segment)', 'AdminSuratMasukController::edit/$1');
$routes->get('/admin/suratmasuknonvalid/valid/(:segment)', 'AdminSuratMasukController::validasi_data/$1');
$routes->get('/admin/suratmasuk/delete/(:segment)', 'AdminSuratMasukController::delete/$1');
$routes->get('/admin/suratmasuknonvalid/delete/(:segment)', 'AdminSuratMasukController::delete_nonvalid/$1');
$routes->post('/admin/suratmasuk/update/(:segment)', 'AdminSuratMasukController::update/$1');
$routes->post('/admin/suratmasuk/store', 'AdminSuratMasukController::store');
$routes->post('/admin/suratmasuk/store_valid', 'AdminSuratMasukController::store_valid');

$routes->get('/admin/suratkeluar', 'AdminSuratKeluarController::index');
$routes->get('/admin/suratkeluar/create', 'AdminSuratKeluarController::create');
$routes->get('/admin/suratkeluar/edit/(:segment)', 'AdminSuratKeluarController::edit/$1');
$routes->get('/admin/suratkeluar/delete/(:segment)', 'AdminSuratKeluarController::delete/$1');
$routes->post('/admin/suratkeluar/update/(:segment)', 'AdminSuratKeluarController::update/$1');
$routes->post('/admin/suratkeluar/store', 'AdminSuratKeluarController::store');

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
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php'))
{
	require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}