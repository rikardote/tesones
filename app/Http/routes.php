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
Route::get('tesones/{id}/destroy', [
        'uses' => 'TesonesController@destroy',
        'as' => 'admin.tesones.destroy'
]);

Route::get('tesones/{id}/borrar', [
        'uses' => 'TesonesController@borrar',
        'as' => 'teson.borrar'
]);
Route::resource('usuarios', 'UsersController');
Route::get('usuarios/{id}/borrar', [
        'uses' => 'UsersController@borrar',
        'as' => 'usuario.destroy'
]);
Route::get('usuarios/{id}/password', [
        'uses' => 'UsersController@edit_password',
        'as' => 'usuarios.edit.password'
]);
Route::patch('usuarios/{id}/password', [
        'uses' => 'UsersController@update_password',
        'as' => 'usuarios.update.password'
]);
Route::resource('info_nominas', 'NominasController');
Route::get('users_all/', [
        'uses' => 'UsersController@users_all',
        'as' => 'admin.users_all.index'
]);
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

Route::get('todas', [
        'uses' => 'TesonesController@todas',
        'as' => 'todas.index'
]);

Route::auth();

Route::get('/', 'TesonesController@index');
