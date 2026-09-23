<?php

use Illuminate\Support\Facades\Route;

Route::prefix('admin')->name('admin.')->group(function (): void {
    Route::view('/dashboard', 'pages.admin.dashboard')->name('dashboard');
    Route::view('/petugas', 'pages.admin.staff.index')->name('staff.index');
    Route::view('/petugas/buat', 'pages.admin.staff.create')->name('staff.create');
    Route::view('/petugas/{id}/edit', 'pages.admin.staff.edit')->whereNumber('id')->name('staff.edit');
    Route::view('/kategori', 'pages.admin.categories.index')->name('categories.index');
    Route::view('/kategori/buat', 'pages.admin.categories.create')->name('categories.create');
    Route::view('/kategori/{id}/edit', 'pages.admin.categories.edit')->whereNumber('id')->name('categories.edit');
    Route::view('/lokasi', 'pages.admin.locations.index')->name('locations.index');
    Route::view('/lokasi/buat', 'pages.admin.locations.create')->name('locations.create');
    Route::view('/lokasi/{id}/edit', 'pages.admin.locations.edit')->whereNumber('id')->name('locations.edit');
    Route::view('/pengumuman', 'pages.admin.announcements.index')->name('announcements.index');
    Route::view('/pengumuman/{id}', 'pages.admin.announcements.show')->whereNumber('id')->name('announcements.show');
    Route::view('/moderasi', 'pages.admin.moderation.index')->name('moderation.index');
    Route::view('/moderasi/{id}', 'pages.admin.moderation.show')->whereNumber('id')->name('moderation.show');
    Route::view('/aktivitas', 'pages.admin.audit.index')->name('audit.index');
    Route::view('/rekap', 'pages.admin.reports.index')->name('reports.index');
    Route::view('/profil', 'pages.admin.profile.edit')->name('profile.edit');
});
