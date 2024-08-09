<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Pages::login');
$routes->get('/Login', 'Pages::login');



// DASHBOARD
$routes->get('/Dashboard', 'User::dashboard');
$routes->get('/Dashboard/Logout', 'User::Logout');
$routes->post('/Dashboard/Dokument', 'DataDiriController::dokument');

// DASHBOARD->DataDiriModel()
$routes->post('/formcontroller/submitdata', 'DataDiriController::Create');
$routes->post('/Dokument/save', 'Dokument::Submit');




#--------------------------------------------------------------------
# USER
#--------------------------------------------------------------------
$routes->post('/User/Login', 'User::login');
$routes->get('/User', 'User::index');
$routes->get('spmb-stimik/index.php/User/Proses', 
'User::Proses');
$routes->post('/save', 'User::Save');





#--------------------------------------------------------------------
# END USER
#--------------------------------------------------------------------

// testing
$routes->get('/testing', 'db::index');
