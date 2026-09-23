<?php

use Illuminate\Support\Facades\Route;

Route::prefix('petugas')->name('staff.')->group(function (): void {
    Route::view('/dashboard', 'pages.staff.dashboard')->name('dashboard');
    Route::view('/barang-hilang', 'pages.staff.lost-items.index')->name('lost-items.index');
    Route::view('/barang-hilang/{id}', 'pages.staff.lost-items.show')->whereNumber('id')->name('lost-items.show');
    Route::view('/pengajuan-temuan', 'pages.staff.submissions.index')->name('submissions.index');
    Route::view('/pengajuan-temuan/{id}', 'pages.staff.submissions.show')->whereNumber('id')->name('submissions.show');
    Route::view('/barang', 'pages.staff.inventory.index')->name('inventory.index');
    Route::view('/barang/buat', 'pages.staff.inventory.create')->name('inventory.create');
    Route::view('/barang/{id}', 'pages.staff.inventory.show')->whereNumber('id')->name('inventory.show');
    Route::view('/barang/{id}/edit', 'pages.staff.inventory.edit')->whereNumber('id')->name('inventory.edit');
    Route::view('/klaim', 'pages.staff.claims.index')->name('claims.index');
    Route::view('/klaim/{id}', 'pages.staff.claims.show')->whereNumber('id')->name('claims.show');
    Route::view('/klaim/{id}/penyerahan', 'pages.staff.handovers.create')->whereNumber('id')->name('handovers.create');
    Route::view('/riwayat', 'pages.staff.history.index')->name('history.index');
    Route::view('/rekap', 'pages.staff.reports.index')->name('reports.index');
    Route::view('/profil', 'pages.staff.profile.edit')->name('profile.edit');
});
