<?php

use Illuminate\Support\Facades\Route;

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

// Rutas para Materia Prima
Route::resource('raw_material','RawMaterialController');

// Rutas para Producto
Route::resource('product','ProductController');

// Rutas para Almacen
Route::resource('store','StoreController');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
