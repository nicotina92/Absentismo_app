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
    return view('welcome');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


//RUTAS ADMIN
Route::get('/admin/index','AdminController@index')->name('AdminHome');
Route::get('/admin/administrar','AdminController@administrar')->name('AdministrarUsers');
Route::get('/admin/config', 'EventCalendar@index')->name('AdminConfig');

//RUTAS USER

Route::get('/user/index','UserController@index')->name('UserHome');