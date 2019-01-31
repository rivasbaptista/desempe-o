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
    return view('home');
});

Auth::routes(['verify' => true, 'register' => false]);

Route::get('/', 'HomeController@index')->name('home')->middleware('verified')->middleware('auth', 'role:rrhh'); //->middleware('auth', 'role:admin')
