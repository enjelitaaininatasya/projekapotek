<?php

use CodeIgniter\Router\RouteCollection;
use App\Controllers\Home;
use App\Controllers\PesananController;
use App\Controllers\PelangganController;
use App\Controllers\ObatController;
use App\Controllers\DatatransaksiController;
use App\Controllers\LaporankeuanganController;
use App\Controllers\PegawaiController;

use CodeIgniter\Commands\Utilities\Routes;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', [Home::class, 'index']);
$routes->get('/register', [Home::class, 'register']);
$routes->get('/login', [Home::class, 'login']);

$routes->get('/pelanggan/aboutus', [Home::class, 'aboutuspelanggan']);
$routes->get('/pelanggan/obat', [ObatController::class, 'indexPelanggan']);
$routes->get('/pelanggan/tambahpesanan', [PesananController::class, 'create']);
$routes->post('/pelanggan/konfirmasipesanan', [PesananController::class, 'konfirmasi']);

$routes->get('/admin/aboutus', [Home::class, 'aboutusadmin']);
$routes->get('/admin/obat', [ObatController::class, 'indexAdmin']);
$routes->get('/admin/tambahobat', [ObatController::class, 'createAdmin']);
$routes->get('/admin/editobat', [ObatController::class, 'edit']);
$routes->get('/admin/pegawai', [PegawaiController::class, 'indexAdmin']);
$routes->get('/admin/tambahpegawai', [PegawaiController::class, 'create']);
$routes->get('/admin/editpegawai', [PegawaiController::class, 'edit']);
$routes->get('/admin/pesanan', [PesananController::class, 'indexAdmin']);
$routes->get('/admin/pelanggan', [PelangganController::class, 'indexAdmin']);
$routes->get('/admin/datatransaksi', [DatatransaksiController::class, 'indexAdmin']);
$routes->get('/admin/tambahdatatransaksi', [DatatransaksiController::class, 'createAdmin']);
$routes->get('/admin/laporankeuangan', [LaporankeuanganController::class, 'indexAdmin']);
$routes->get('/admin/tambahlaporankeuangan', [LaporankeuanganController::class, 'createAdmin']);

$routes->get('/pegawai/aboutus', [Home::class, 'aboutuspegawai']);
$routes->get('/pegawai/datatransaksi', [DatatransaksiController::class, 'indexpegawai']);
$routes->get('/pegawai/tambahdatatransaksi', [DatatransaksiController::class, 'createPegawai']);
$routes->post('/pegawai/savedatatransaksi', [DatatransaksiController::class, 'storePegawai']);
$routes->get('/pegawai/laporankeuangan', [LaporankeuanganController::class, 'indexPegawai']);
$routes->get('/pegawai/tambahlaporankeuangan', [LaporankeuanganController::class, 'createPegawai']);
$routes->post('/pegawai/savelaporankeuangan', [LaporankeuanganController::class, 'storePegawai']);
$routes->get('/pegawai/pesanan', [PesananController::class, 'indexPegawai']);
$routes->get('/pegawai/pelanggan', [PelangganController::class, 'indexPegawai']);
$routes->get('/pegawai/obat', [ObatController::class, 'indexPegawai']);
$routes->get('/pegawai/tambahobat', [ObatController::class, 'createPegawai']);
$routes->get('/pegawai/editobat', [ObatController::class, 'editPegawai']);