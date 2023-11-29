<?php

use CodeIgniter\Router\RouteCollection;
use App\Controllers\Home;
use App\Controllers\PesananController;
use App\Controllers\PelangganController;
use App\Controllers\ObatController;
use App\Controllers\DatatransaksiController;
use App\Controllers\LaporankeuanganController;
use App\Controllers\PegawaiController;
use Config\Auth;

use CodeIgniter\Commands\Utilities\Routes;

/**
 * @var RouteCollection $routes
 */

 $routes->group('', ['namespace' => 'App\Controllers'], static function ($routes) {
    // Load the reserved routes from Auth.php
    $config         = config(Auth::class);
    $reservedRoutes = $config->reservedRoutes;

    // Login/out
    $routes->get($reservedRoutes['login'], 'AuthController::login', ['as' => $reservedRoutes['login']]);
    $routes->post($reservedRoutes['login'], 'AuthController::attemptLogin');
    $routes->get($reservedRoutes['logout'], 'AuthController::logout');

    // Registration
    $routes->get($reservedRoutes['register'], 'AuthController::register', ['as' => $reservedRoutes['register']]);
    $routes->post($reservedRoutes['register'], 'AuthController::attemptRegister');

    // Activation
    $routes->get($reservedRoutes['activate-account'], 'AuthController::activateAccount', ['as' => $reservedRoutes['activate-account']]);
    $routes->get($reservedRoutes['resend-activate-account'], 'AuthController::resendActivateAccount', ['as' => $reservedRoutes['resend-activate-account']]);

    // Forgot/Resets
    $routes->get($reservedRoutes['forgot'], 'AuthController::forgotPassword', ['as' => $reservedRoutes['forgot']]);
    $routes->post($reservedRoutes['forgot'], 'AuthController::attemptForgot');
    $routes->get($reservedRoutes['reset-password'], 'AuthController::resetPassword', ['as' => $reservedRoutes['reset-password']]);
    $routes->post($reservedRoutes['reset-password'], 'AuthController::attemptReset');
});

$routes->get('/', [Home::class, 'index']);
$routes->get('/auth', [Home::class, 'auth']);
$routes->get('/register', [Home::class, 'register']);
$routes->get('/login', [Home::class, 'login']);

$routes->get('/pelanggan/aboutus', [Home::class, 'aboutuspelanggan'], ['filter' => 'role:pelanggan']);
$routes->get('/pelanggan/obat', [ObatController::class, 'indexPelanggan'], ['filter' => 'role:pelanggan']);
$routes->get('/pelanggan/tambahpesanan', [PesananController::class, 'create'], ['filter' => 'role:pelanggan']);
$routes->post('/pelanggan/konfirmasipesanan', [PesananController::class, 'konfirmasi'], ['filter' => 'role:pelanggan']);

// admin aboutus
$routes->get('/admin/aboutus', [Home::class, 'aboutusadmin'], ['filter' => 'role:admin']);
// admin obat
$routes->get('/admin/obat', [ObatController::class, 'indexAdmin'], ['filter' => 'role:admin']);
$routes->get('/admin/tambahobat', [ObatController::class, 'createAdmin'], ['filter' => 'role:admin']);
$routes->delete('/admin/delete/(:any)', [ObatController::class, 'delete' ], ['filter' => 'role:admin']);
$routes->put('/admin/editobat/(:any)', [ObatController::class, 'update' ], ['filter' => 'role:admin']);
$routes->post('/admin/stores', [ObatController::class, 'stores'], ['filter' => 'role:admin']);
$routes->get('/admin/editobat/(:any)', [ObatController::class, 'edit' ], ['filter' => 'role:admin']);
// admin pegawai
$routes->get('/admin/pegawai', [PegawaiController::class, 'indexAdmin'], ['filter' => 'role:admin']);
$routes->get('/admin/tambahpegawai', [PegawaiController::class, 'create'], ['filter' => 'role:admin']);
$routes->get('/admin/editpegawai/(:any)', [PegawaiController::class, 'edit'], ['filter' => 'role:admin']);
$routes->put('/admin/updatepegawai/(:any)', [PegawaiController::class, 'update'], ['filter' => 'role:admin']);
$routes->get('/admin/hapuspegawai/(:any)', [PegawaiController::class, 'destroy'], ['filter' => 'role:admin']);
// admin pelanggan
$routes->get('/admin/pelanggan', [PelangganController::class, 'indexAdmin'], ['filter' => 'role:admin']);
$routes->get('/admin/editpelanggan/(:any)', [PelangganController::class, 'edit'], ['filter' => 'role:admin']);
$routes->put('/admin/updatepelanggan/(:any)', [PelangganController::class, 'update'], ['filter' => 'role:admin']);
$routes->get('/admin/turnpegawai/(:any)', [PelangganController::class, 'turnPegawai'], ['filter' => 'role:admin']);
$routes->get('/admin/hapuspelanggan/(:any)', [PelangganController::class, 'destroy'], ['filter' => 'role:admin']);
//admin pesanan
$routes->get('/admin/pesanan', [PesananController::class, 'indexAdmin'], ['filter' => 'role:admin']);
// admin data transaksi
$routes->get('/admin/datatransaksi', [DatatransaksiController::class, 'indexAdmin'], ['filter' => 'role:admin']);
$routes->get('/admin/tambahdatatransaksi', [DatatransaksiController::class, 'createAdmin'], ['filter' => 'role:admin']);
$routes->post('/admin/storedatatransaksi', [DatatransaksiController::class, 'storeAdmin'], ['filter' => 'role:admin']);
$routes->get('/admin/editdatatransaksi/(:any)', [DatatransaksiController::class, 'editAdmin'], ['filter' => 'role:admin']);
$routes->put('/admin/updatedatatransaksi/(:any)', [DatatransaksiController::class, 'updateAdmin'], ['filter' => 'role:admin']);
$routes->get('/admin/hapusdatatransaksi/(:any)', [DatatransaksiController::class, 'destroyAdmin'], ['filter' => 'role:admin']);
// admin laporan keuangan
$routes->get('/admin/laporankeuangan', [LaporankeuanganController::class, 'indexAdmin'], ['filter' => 'role:admin']);
$routes->get('/admin/tambahlaporankeuangan', [LaporankeuanganController::class, 'createAdmin'], ['filter' => 'role:admin']);
$routes->post('/admin/storelaporankeuangan', [LaporankeuanganController::class, 'storeAdmin'], ['filter' => 'role:admin']);
$routes->get('/admin/editlaporan/(:any)', [LaporankeuanganController::class, 'editAdmin'], ['filter' => 'role:admin']);
$routes->put('/admin/updatelaporan/(:any)', [LaporankeuanganController::class, 'updateAdmin'], ['filter' => 'role:admin']);
$routes->get('/admin/hapuslaporan/(:any)', [LaporankeuanganController::class, 'destroyAdmin'], ['filter' => 'role:admin']);

// pegawai
$routes->get('/pegawai/aboutus', [Home::class, 'aboutuspegawai'], ['filter' => 'role:pegawai']);
$routes->get('/pegawai/datatransaksi', [DatatransaksiController::class, 'indexpegawai'], ['filter' => 'role:pegawai']);
$routes->get('/pegawai/tambahdatatransaksi', [DatatransaksiController::class, 'createPegawai'], ['filter' => 'role:pegawai']);
$routes->post('/pegawai/savedatatransaksi', [DatatransaksiController::class, 'storePegawai'], ['filter' => 'role:pegawai']);
$routes->get('/pegawai/laporankeuangan', [LaporankeuanganController::class, 'indexPegawai'], ['filter' => 'role:pegawai']);
$routes->get('/pegawai/tambahlaporankeuangan', [LaporankeuanganController::class, 'createPegawai'], ['filter' => 'role:pegawai']);
$routes->post('/pegawai/savelaporankeuangan', [LaporankeuanganController::class, 'storePegawai'], ['filter' => 'role:pegawai']);
$routes->get('/pegawai/pesanan', [PesananController::class, 'indexPegawai'], ['filter' => 'role:pegawai']);
$routes->get('/pegawai/pelanggan', [PelangganController::class, 'indexPegawai'], ['filter' => 'role:pegawai']);
$routes->get('/pegawai/obat', [ObatController::class, 'indexPegawai'], ['filter' => 'role:pegawai']);
$routes->get('/pegawai/tambahobat', [ObatController::class, 'createPegawai'], ['filter' => 'role:pegawai']);
$routes->delete('/pegawai/delete/(:any)', [ObatController::class, 'destroy' ], ['filter' => 'role:pegawai']);
$routes->put('/pegawai/editobat/(:any)', [ObatController::class, 'updatePegawai' ], ['filter' => 'role:pegawai']);
$routes->post('/pegawai/store', [ObatController::class, 'store'], ['filter' => 'role:pegawai']);
$routes->get('/pegawai/editobat/(:any)', [ObatController::class, 'editPegawai' ], ['filter' => 'role:pegawai']);
