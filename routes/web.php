<?php

use App\Http\Middleware\LocalScaffoldOnly;
use Illuminate\Support\Facades\Route;

Route::view('/', 'pages.auth.login')->name('home');
Route::view('/login', 'pages.auth.login')->name('login');
Route::view('/login/petugas', 'pages.auth.staff-login')->name('staff.login');

// Pratinjau halaman kosong hanya tersedia pada lingkungan local/testing.
// Ganti dengan autentikasi dan otorisasi sebenarnya saat fitur mulai dibuat.
Route::middleware(LocalScaffoldOnly::class)->group(function (): void {
    require __DIR__.'/student.php';
    require __DIR__.'/staff.php';
    require __DIR__.'/admin.php';
});
