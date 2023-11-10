<?php

use CodeIgniter\Router\RouteCollection;
use App\Controllers\Home;
use App\Controllers\PesananController;
use App\Controllers\ObatController;


/**
 * @var RouteCollection $routes
 */
$routes->get('/', [Home::class, 'index']);

$routes->get('/register', [Home::class, 'register']);
$routes->get('/login', [Home::class, 'login']);


$routes->get('/obat', [Home::class, 'obat']);
$routes->get('/tambah', [Home::class, 'tambah']);
$routes->get('/edit', [Home::class, 'edit']);

$routes->get('/pegawai', [Home::class, 'pegawai']);
$routes->get('/tmbh', [Home::class, 'tmbh']);
$routes->get('/ubah', [Home::class, 'ubah']);

$routes->get('/tambahpesanan', [PesananController::class, 'create']);
$routes->post('/konfirmasipesanan', [PesananController::class, 'konfirmasi']);
$routes->get('/obatpelanggan', [ObatController::class, 'index']);

$routes->get('/view_pemesanan', [PesananController::class, 'data']);




