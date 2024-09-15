<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Pages::index');
// $routes->setAutoRoute(true);
$routes->get('/beranda', 'Umum\Beranda::index');
$routes->get('/beranda/tambah-data', 'Umum\Beranda::addData');
$routes->post('/beranda/tambah-data/proses', 'Umum\Beranda::prosesAddData');
$routes->get('/beranda/edit-data/(:any)', 'Umum\Beranda::editData/$1');
$routes->post('/beranda/edit-data/proses/(:any)', 'Umum\Beranda::prosesEditData/$1');
$routes->get('/beranda/hapus-data/(:any)', 'Umum\Beranda::hapusData/$1');

