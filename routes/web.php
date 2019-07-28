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

Route::get('/login', function () {
    return view('auth/login');
});
// Route::get('/welcome', function(){
//     return view('welcome');
// });

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/main', 'ControllerMain@index')->name('main');
Route::get('/index', 'ControllerIndex@index')->name('index');
Route::get('/testing','ControllerTesting@index')->name('testing');
Route::post('/createtesting', 'ControllerTesting@store')->name('createtesting');
// Route::get('print-test','ControllerTesting@generatePDF')->name('print');
Route::get('cetak_test{id}','ControllerTesting@cetak')->name('cetak');
Route::post('/index/import_excel', 'ControllerIndex@import_excel');

// Route::get('/training/export_excel', 'SiswaController@export_excel');
// Route::post('/show/{$id}','ControllerTesting@show')->name('show');
// Route::post('show','ControllerTesting@show')->name('show');
// Route::resource('show','ControllerTesting');


