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

Route::resource('/ayudantias', 'EstudianteController');

Route::resource('/cafeteria', 'EmpleadoController');

Route::resource('/admin', 'AdminController');

Route::resource('/listaBeneficiarios', 'BeneficiarioController');

Route::resource('/director', 'DirectorController');

Route::post('/Login', 'Auth\LoginController@login')->name('/Login');