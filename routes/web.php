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
Route::get('/', function () {
    return view('welcome');
});*/
Route::get('', 'MenuController@index');

Route::get('servicios', 'MenuController@servicios');
Route::resource('usuario', 'UsuarioController');
Route::resource('admin', 'AdminController');
Route::resource('publicaciones', 'EventoController');

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
