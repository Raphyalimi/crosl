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
});


Route::get('/accueil', function () {
    return view('accueil');
});

Route::get('/ligue', function () {
    return view('ligue');
});

Route::get('/prestation', function () {
    return view('prestation');
});