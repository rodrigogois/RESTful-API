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


Route::group(['middleware' => 'cors'], function () {

 //   Route::get('cidade', array('middleware' => 'cors', 'uses' => 'CidadeController@index'));

    Route::get('categoria', 'CategoriaController@index');
    Route::get('categoria/{id}', 'CategoriaController@show');
    Route::post('categoria', 'CategoriaController@store');

    Route::get('cidade', 'CidadeController@lista');
    Route::get('cidade/{id}', 'CidadeController@obter');
});
