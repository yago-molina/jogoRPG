<?php

use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('tela_inicial');
})->name('telainicial');

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::get('/combat', function () {
    return view('combat');
})->name('combat');

Route::get('/creditos', function () {
    return view('creditos');
})->name('creditos');