<?php

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

Route::get('/', function () {
    return view('index');
})->name('index');


Route::get('/materiais-gratuitos', function () {
    return view('materiaisgratuitos');
})->name('materiaisgratuitos');

Route::get('/basico-afrfb', function () {
    return view('basicoafrfb');
})->name('basico-afrfb');