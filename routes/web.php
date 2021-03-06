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

Route::get('/', 'BencanaController@welcome');

Route::get('/add_data', function () {
    return view('adddata');
});

Route::post('/add_data_to_db', 'BencanaController@store');

Route::get('/view_data', 'BencanaController@index');

Route::get('/view_map', function () {
    return view('map');
});

Route::get('/admin', function () {
    return view('admin.auth.login');
});

Route::post('/admin/signIn', 'Auth\LoginController@signin');

Route::get('/admin/logout', 'Auth\LoginController@logout');
