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
//Route::get('/teste', 'HomeController@novoCurriculo')->name('novoCurriculo');

Route::resource('candidatos', 'CandidatoController');

Route::get('/getDocumento/{id}', 'CandidatoController@getCurriculo')->name('getCurriculo');

//Route::get('/cardapios/editar/{id}', 'CardapioController@edit')->name('cardapio.editar');
