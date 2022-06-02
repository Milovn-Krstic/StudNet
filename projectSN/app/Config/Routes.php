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
$routes->setDefaultController('Guest');
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
$routes->get('/', 'LogIn::index');
$routes->get('/index', 'LogIn::index');
$routes->get('/register_moderator', 'Guest::register_moderator');
$routes->get('/register_others', 'Guest::register_others');
$routes->get('/register_university', 'Guest::register_university');
$routes->get('/register_advertiser', 'Guest::register_advertiser');
$routes->get('/student-main', 'Student::main');
$routes->get('/student-timer', 'Student::timer');
$routes->get('/student-plans', 'Student::plans');
$routes->get('/student-profile', 'Student::profile');
$routes->get('/student-view', 'Student::view_user');

$routes->get('/moderator-main', 'Moderator::main');
$routes->get('/moderator-profile', 'Moderator::profile');

$routes->get('/logout', 'LogIn::index');
$routes->post('/ajax-request-register-student', 'Guest::ajaxRequestRegisterStudent');
$routes->post('/ajax-request-register-moderator', 'Guest::ajaxRequestRegisterModerator');
$routes->post('/ajax-request-redirect', 'Guest::ajaxRequestRedirect');
$routes->post('/loginSubmit', 'LogIn::loginSubmit');
$routes->get('/loginSubmit', 'LogIn::loginSubmit');


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
