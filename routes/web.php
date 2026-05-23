<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/Walikelas/login', function () {
    return view('Walikelas.login');
})->name('Walikelas.login');