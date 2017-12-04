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

Route::get('/home', 'HomeController@index');

Route::resource('tematicas', 'TematicasController');

Route::resource('caComponentes', 'CaComponentesController');

Route::resource('destinatarios', 'DestinatariosController');

Route::resource('estados', 'EstadosController');

Route::resource('pautasActions', 'PautasActionsController');

Route::resource('pautas', 'PautasController');

Route::resource('provincias', 'ProvinciasController');

Route::resource('sumarteTallers', 'sumarteTallersController');

Route::resource('tiposActions', 'TiposActionsController');
