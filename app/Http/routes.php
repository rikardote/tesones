<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


Route::resource('tesones', 'TesonesController');
Route::resource('usuarios', 'UsersController');
Route::resource('info_nominas', 'NominasController');
Route::get('info_nominas/{id}/destroy', [
        'uses' => 'NominasController@destroy',
        'as' => 'admin.info_nominas.destroy'
]);
Route::resource('cancelaciones', 'CancelacionesController');
Route::get('cancelar/{teson}', [
        'uses' => 'TesonesController@cancelar',
        'as' => 'cancelar.teson'
]);
Route::post('cancelar/{teson}', [
        'uses' => 'TesonesController@cancelar_store',
        'as' => 'cancelar.teson.store'
]);

Route::get('tesones/{id}/imprimir', [
        'uses' => 'TesonesController@print_teson',
        'as' => 'print_teson'
]);

Route::auth();

Route::get('/', 'TesonesController@index');
