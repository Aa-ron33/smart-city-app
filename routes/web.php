<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\ComplaintController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ServicesController;

//route untuk main page

Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/services', [ServicesController::class, 'index'])->name('services');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');

//route untuk auth login dan dashboard

Route::get('/login', [PageController::class, 'login'])->name('login');
Route::post('/login', [PageController::class, 'authenticate'])->name('login.post');
Route::get('/register', [PageController::class, 'register'])->name('register');
Route::post('/register', [PageController::class, 'store'])->name('register.post');
Route::post('/logout', [PageController::class, 'logout'])->name('logout');
Route::get('/dashboard', [PageController::class, 'dashboard'])->name('dashboard');
Route::middleware('auth')->group(function () {
    Route::get('/profile', [PageController::class, 'profile'])->name('profile');
});

//route untuk complaints

Route::get('/complaints', [ComplaintController::class, 'index'])->name('complaints.index');
Route::get('/complaints/create', [ComplaintController::class, 'create'])->name('complaints.create');
Route::post('/complaints', [ComplaintController::class, 'store'])->name('complaints.store');
Route::get('/complaints/{id}', [ComplaintController::class, 'show'])->name('complaints.show');
Route::get('/complaints/{id}/status', [ComplaintController::class, 'status'])->name('complaints.status');
Route::get('/complaints/{id}/edit', [ComplaintController::class, 'edit'])->name('complaints.edit');
Route::put('/complaints/{id}', [ComplaintController::class, 'update'])->name('complaints.update');
Route::delete('/complaints/{id}', [ComplaintController::class, 'destroy'])->name('complaints.destroy');

// route untuk admin

Route::middleware('auth')->prefix('admin')->name('admin.')->group(function () {
    Route::get('complaints', [ComplaintController::class, 'index'])->name('complaints');
    Route::patch('complaints/{id}/status', [ComplaintController::class, 'updateStatus'])->name('complaints.status.update');
});
// ==========================================LATIHAN ROUTE==========================================
//     Route::prefix('complaint')->name('complaint.')->group(function () {
//     Route::get('/', function () { return 'List Pengaduan'; })->name('index');
//     Route::get('/create', function () { return 'Form Pengaduan'; })->name('create');
//     Route::get('/{id}', function ($id) { 
//         if (!$id) {
//             return redirect()->route('complaint.index'); }})->name('show')->where('id', '[0-9]+');
//     Route::get('/{id}/status', function ($id) { return 'status pengaduan: ' . $id; })->name('status');
//     Route::get('/{id}/edit', function ($id) { return 'Edit Pengaduan: ' . $id; })->name('edit');

// });
// Route::get('/welcome-page', function () {
//     return 'wellcome to smart city';
// });

// // =====================
// // PUBLIC
// // =====================
// Route::get('/', function () { return 'Smart City Home'; });
// Route::get('/news', function () { return 'Berita Kota'; });
// Route::get('/emergency', function () { return 'Emergency & Kedaruratan'; });

// // =====================
// // login & register
// // =====================
// Route::get('/login', function () { return 'Login'; })->name('login');
// Route::get('/register', function () { return 'Register'; })->name('register');

// // =====================
// // DASHBOARD
// // =====================
// Route::prefix('dashboard')->name('dashboard.')->group(function () {
//     Route::get('/', function () { return 'Dashboard Utama'; })->name('index');
//     Route::get('/statistik', function () { return 'Statistik Kota'; })->name('statistik');
//     Route::get('/monitoring', function () { return 'Monitoring Lingkungan'; })->name('monitoring');
// });

// // =====================
// // Users
// // =====================
// Route::prefix('users')->name('users.')->group(function () {
//     Route::get('/', function () { return 'List Warga'; })->name('index');
//     Route::get('/profile', function () { return 'Profil Warga'; })->name('profile');
//     Route::get('/services', function () { return 'Layanan Warga'; })->name('services');
//     Route::get('/social', function () { return 'Social Daily Life'; })->name('social');
// });

// // =====================
// // LAYANAN PUBLIK
// // =====================
// Route::prefix('layanan')->name('layanan.')->group(function () {
//     Route::get('/', function () { return 'List Layanan'; })->name('index');
//     Route::get('/ktp', function () { return 'Layanan KTP'; })->name('ktp');
//     Route::get('/sim', function () { return 'Layanan SIM'; })->name('sim');
//     Route::get('/pengaduan', function () { return 'Laporan & Pengaduan'; })->name('pengaduan');
// });

// // =====================
// // TRANSPORTASI
// // =====================
// Route::prefix('transport')->name('transport.')->group(function () {
//     Route::get('/', function () { return 'Info Transportasi'; })->name('index');
//     Route::get('/rute', function () { return 'Rute Kendaraan'; })->name('rute');
//     Route::get('/jadwal', function () { return 'Jadwal'; })->name('jadwal');
// });

// // =====================
// // ECOMMERCE & SERVICES
// // =====================
// Route::prefix('market')->name('market.')->group(function () {
//     Route::get('/', function () { return 'Smart Market'; })->name('index');
//     Route::get('/produk', function () { return 'List Produk'; })->name('produk');
//     Route::get('/orders', function () { return 'Orders'; })->name('orders');
// });

//beginer awalan latihan//
// Route::get('/halo/{nama}', function ($nama) {
//     return 'Halo, ' . $nama . '!';
// });

// Route::get('/greet/{nama?}', function ($nama = 'Guest') {
//     return 'Hello, ' . $nama . '!';
// });

// Route::get('/about', function () {
//     return 'this all about';
// })->name('about');

// Route::get('/my-profile', function () {
//     return 'this is my profile';
// })->name('my-profile');

// Route::get('/to-my-profile', function () {
//     return redirect()->route('my-profile');
// })->name('to-my-profile');

// Route::get('/url-profile', function () {
// $url = route('my-profile');
// return 'this is profile, url: ' . $url;
// });

//parameter dengan regex//
// Route::get('/warga/{id?}', function ($id = null) {
//     if ($id) {
//         return 'Detail warga ID: ' . $id;
//     } else {
//         return 'Semua Warga';
//     }
// });

// Route::get('/user/{id}', function ($id) {
//     return 'User ID: ' . $id;
// })->where('id', '[0-9]+')->name('user.show');

// Route::get('/users', function () {
//     return 'List Users';
// })->name('users.index');

// Route::prefix ('api/v1')->name('api.v1.')->group(function () {
//     Route::get('/users', function () { return 'List Users'; })->name('all.users');
//     Route::get('/users/{id}', function ($id) { return 'User Detail: ' . $id; })->name('users.show');
//     Route::get('/users/{id}/posts', function ($id) { return 'User Posts: ' . $id; })->name('users.posts');
// });

//grup di dalam grup//
// Route::prefix ('admin')->name('admin.')->group(function () {
//     Route::get('/', function () { return 'Admin Dashboard'; })->name('index');
//     Route::get('/users', function () { return 'Manage Users'; })->name('users');
//     Route::get('/settings', function () { return 'Admin Settings'; })->name('settings');
//     Route::prefix('/reports')->name('reports.')->group(function () {
//         Route::get('/daily', function () { return 'Daily Reports'; })->name('daily');
//         Route::get('/weekly', function () { return 'Weekly Reports'; })->name('weekly');
//         Route::get('/monthly', function () { return 'Monthly Reports'; })->name('monthly');
//     });
// });