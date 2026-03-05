<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

// --------------------------------------------------------------------
// 1. HALAMAN AWAL (Redirect ke Login)
// --------------------------------------------------------------------
$routes->get('/', 'User::login');

// --------------------------------------------------------------------
// 2. ROUTE AUTH (Login, Register, Logout)
// --------------------------------------------------------------------
$routes->get('/login', 'User::login');
$routes->post('/login/process', 'User::loginProcess');
$routes->get('/register', 'User::register');
$routes->post('/register/process', 'User::registerProcess');
$routes->get('/logout', 'User::logout');

// --------------------------------------------------------------------
// 3. ROUTE USER / ARTIKEL (Perlu Login)
// --------------------------------------------------------------------
$routes->group('artikel', ['filter' => 'auth'], function ($routes) {
    // Halaman Utama Daftar Berita
    $routes->get('/', 'Artikel::index');

    // [PENTING] Menu Statis (Tentang Kami & Kontak)
    // Posisi ini WAJIB DI ATAS route (:any) agar terbaca duluan
    $routes->get('about', 'Artikel::about');
    $routes->get('contact', 'Artikel::contact');

    // Halaman Baca Detail Berita (Menggunakan Slug Dinamis)
    // Posisi ini WAJIB PALING BAWAH di dalam grup ini
    $routes->get('(:any)', 'Artikel::view/$1');
});

// --------------------------------------------------------------------
// 4. ROUTE ADMIN (Perlu Login)
// --------------------------------------------------------------------
$routes->group('admin', ['filter' => 'auth'], function ($routes) {
    $routes->get('artikel', 'Artikel::admin_index');
    $routes->get('artikel/add', 'Artikel::add');
    $routes->post('artikel/add', 'Artikel::add');
    $routes->get('artikel/edit/(:num)', 'Artikel::edit/$1');
    $routes->post('artikel/edit/(:num)', 'Artikel::edit/$1');
    $routes->get('artikel/delete/(:num)', 'Artikel::delete/$1');
});