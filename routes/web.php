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

/*
Route::get('/', function () {
    return view('home');
});

Route::get('/register', "AuthController@register")->name('register');
Route::post('/welcome', "HomeController@welcome")->name('welcome');

Route::get('/master', function () {
    return view('adminlte.master');
});

Route::get('/items', function () {
    return view('items.index');
});

Route::get('/items/create', function () {
    return view('items.create');
});
*/

Route::get('/', function () {
    return view('table.index');
});

Route::get('/data-tables', function () {
    return view('table.datatable');
});
