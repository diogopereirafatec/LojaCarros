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

//Route::get('/', function () {return view('/home');});
Route::get('/','veiculosController@listar')->name('home');
//Route::get('/veiculos/{id}','veiculosController@show');
Route::get('/home','veiculosController@listar')->name('home');

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
Route::resource('/marcas', 'marcasController')->middleware('auth');
Route::resource('/modelos', 'modelosController')->middleware('auth');
Route::resource('/cargos', 'cargosController')->middleware('auth');
Route::resource('/veiculos', 'veiculosController')->middleware('auth');
Route::resource('/funcionarios', 'funcionariosController')->middleware('auth');
