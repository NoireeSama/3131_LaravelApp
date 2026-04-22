<?php

use Illuminate\Support\Facades\Route;

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/event-detail', function () {
    return view('event-detail');
});

Route::get('/checkout', function () {
    return view('checkout');
});

Route::get('/profil', function () {
    return view('profil');
});

Route::get('/katalog', function () {
    return view('katalog');
});

Route::get('/bantuan', function () {
    return view('bantuan');
});

Route::get('/admin-dashboard', function () {
    return view('admin.dashboard');
});

Route::get('/admin-events', function () {
    return view('admin.events');
});

Route::get('/admin-transactions', function () {
    return view('admin.transactions');
});