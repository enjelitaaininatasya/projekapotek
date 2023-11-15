<?php

use CodeIgniter\Router\RouteCollection;
use App\Controllers\Home;
use App\Controllers\PesananController;
use App\Controllers\ObatController;
use App\Controllers\DatatransaksipegawaiController;
use App\Controllers\LaporankeuanganpegawaiController;
use App\Controllers\PegawaiController;

use CodeIgniter\Commands\Utilities\Routes;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', [Home::class, 'index']);

$routes->get('/register', [Home::class, 'register']);
$routes->get('/login', [Home::class, 'login']);


$routes->get('/obat', [Home::class, 'obat']);
$routes->get('/tambah', [Home::class, 'tambah']);
$routes->get('/edit', [Home::class, 'edit']);

$routes->get('/pegawai', [PegawaiController::class, 'index']);
$routes->get('/tmbh', [Home::class, 'tmbh']);
$routes->get('/ubah', [Home::class, 'ubah']);

$routes->get('/tambahpesanan', [PesananController::class, 'create']);
$routes->post('/konfirmasipesanan', [PesananController::class, 'konfirmasi']);
$routes->get('/obatpelanggan', [ObatController::class, 'index']);


$routes->get('/dtp', [DatatransaksipegawaiController::class, 'index']);
$routes->get('/tambahdtp', [DatatransaksipegawaiController::class, 'create']);
$routes->post('/savedtp', [DatatransaksipegawaiController::class, 'store']);

$routes->get('/lapkeu', [LaporankeuanganpegawaiController::class, 'index']);

$routes->get('/view_pemesanan', [PesananController::class, 'data']);





