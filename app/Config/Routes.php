<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
// $routes->get('/', 'Home::index');
$routes->get('/admin/home', 'Admin\Home::index');
$routes->get('/admin/jadwal', 'Admin\Jadwal::index');
$routes->get('/admin/perusahaan', 'Admin\Perusahaan::index');
$routes->get('/admin/mobil', 'Admin\Mobil::index');
$routes->get('/admin/kontrak', 'Admin\Kontrak::index');
$routes->get('/admin/gaji', 'Admin\Gaji::index');
$routes->get('/admin/history', 'Admin\History::index');
$routes->get('/admin/manajement-akun', 'Admin\ManajementAkun::index');
$routes->get('/admin/akun', 'Admin\Akun::index');
$routes->get('/admin/login', 'Admin\Login::index');
