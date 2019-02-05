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
    
    return redirect()->route('login');
});


Auth::routes(['verify' => true, 'register' => false]);


Route::group(['middleware' => 'role:rrhh'], function() {
    Route::get('/recursos-humanos', 'RecursosHumanosController@index')->name('recursos_humanos.index')->middleware('verified'); 
 });

 Route::group(['middleware' => 'role:evaluador'], function() {
    Route::get('/evaluador', 'EvaluadoresController@index')->name('evaluador.index')->middleware('verified'); 
 });
