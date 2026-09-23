<?php

use Illuminate\Support\Facades\Route;

Route::prefix('mahasiswa')->name('student.')->group(function (): void {
    Route::view('/dashboard', 'pages.student.dashboard')->name('dashboard');
    Route::view('/barang-hilang', 'pages.student.lost-items.index')->name('lost-items.index');
    Route::view('/barang-hilang/buat', 'pages.student.lost-items.create')->name('lost-items.create');
    Route::view('/barang-hilang/{id}', 'pages.student.lost-items.show')->whereNumber('id')->name('lost-items.show');
    Route::view('/barang-hilang/{id}/edit', 'pages.student.lost-items.edit')->whereNumber('id')->name('lost-items.edit');
    Route::view('/barang-temuan', 'pages.student.found-items.index')->name('found-items.index');
    Route::view('/barang-temuan/buat', 'pages.student.found-items.create')->name('found-items.create');
    Route::view('/barang-temuan/{id}', 'pages.student.found-items.show')->whereNumber('id')->name('found-items.show');
    Route::view('/barang-temuan/{id}/edit', 'pages.student.found-items.edit')->whereNumber('id')->name('found-items.edit');
    Route::view('/barang-temuan/{id}/klaim', 'pages.student.claims.create')->whereNumber('id')->name('claims.create');
    Route::view('/klaim/{id}', 'pages.student.claims.show')->whereNumber('id')->name('claims.show');
    Route::view('/aktivitas', 'pages.student.activities.index')->name('activities.index');
    Route::view('/profil', 'pages.student.profile.edit')->name('profile.edit');
});
