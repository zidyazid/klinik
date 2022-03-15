<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\StokController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\MedicineController;
use App\Http\Controllers\DashboardController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('obat.index');
// });

Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/post-login', [AuthController::class, 'post_login']);
Route::get('/logout', [AuthController::class, 'logout']);

Route::middleware(['auth'])->group(function () {
    Route::get('/', [DashboardController::class, 'index']);
    Route::get('/preview-data-obat', [ReportController::class, 'cetak_data_obat']);
    Route::get('/preview-data-pasien', [ReportController::class, 'cetak_data_pasien']);
    // Route::get('/dashboard-create', [DashboardController::class, 'create']);
    // Route::post('/dashboard-store', [DashboardController::class, 'store']);
    // Route::get('/dashboard-edit/{id}', [DashboardController::class, 'edit']);
    // Route::put('/dashboard-edit/dashboard-update/{id}', [DashboardController::class, 'update']);
    // Route::get('/dashboard-delete/{id}', [DashboardController::class, 'destroy']);

    Route::get('/obat', [MedicineController::class, 'index']);
    Route::get('/obat-create', [MedicineController::class, 'create']);
    Route::post('obat-store', [MedicineController::class, 'store']);
    Route::get('obat-edit/{id}', [MedicineController::class, 'edit']);
    Route::put('obat-edit/obat-update/{id}', [MedicineController::class, 'update']);
    Route::get('obat-delete/{id}', [MedicineController::class, 'destroy']);

    Route::get('/stok', [StokController::class, 'index']);
    Route::get('/stok-create', [StokController::class, 'create']);
    Route::post('stok-store', [StokController::class, 'store']);
    Route::get('stok-edit/{id}', [StokController::class, 'edit']);
    Route::put('stok-edit/stok-update/{id}', [StokController::class, 'update']);
    Route::get('stok-delete/{id}', [StokController::class, 'destroy']);

    Route::get('/pasien', [PatientController::class, 'index']);
    Route::get('/pasien-create', [PatientController::class, 'create']);
    Route::post('pasien-store', [PatientController::class, 'store']);
    Route::get('pasien-edit/{id}', [PatientController::class, 'edit']);
    Route::put('pasien-edit/pasien-update/{id}', [PatientController::class, 'update']);
    Route::get('pasien-delete/{id}', [PatientController::class, 'destroy']);
});
