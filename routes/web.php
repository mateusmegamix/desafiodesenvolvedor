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

Route::middleware('auth')->prefix('admin')->namespace('Admin')->group(function(){
	Route::resource('usuarios','UsersController');
	Route::get('all','UsersController@all');

});
Route::get('/home', 'HomeController@index')->name('home');
