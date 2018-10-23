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

Route::get('/basico-afrfb45', function () {
    return view('basicoafrfb45');
})->name('basico-afrfb45');

Route::get('/basicoafrf45-novo', function () {
    return view('basicoafrf45-novo');
})->name('basicoafrf45-novo');

Route::get('/avancado-afrfb', function () {
    return view('avancadoafrfb30');
})->name('avancado-afrfb');

Route::get('/avancado-afrfb45', function () {
    return view('avancadoafrfb45');
})->name('avancado-afrfb45');

