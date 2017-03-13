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
    $eventos = DB::table('eventos')->orderBy('data')->get();
    return view('welcome')->with('eventos', $eventos);
});

Route::resource('registro', 'RegistroController');

//Route::resource('/atletas/inscricao', 'AtletaController@inscricao');

//Route::resource('/atletas', 'EventoController');

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::group(['prefix' => 'relatorios'], function (){
    Route::get('', 'AdmController@index');
    Route::get('registros', 'AdmController@registros');
    Route::get('eventos', 'AdmController@eventos');
    Route::get('atleta_eventos', 'AdmController@atletas_eventos');

});


Route::group(['prefix' => 'atletas'], function (){
    Route::get('', 'EventoController@index');
    Route::get('inscricao', 'EventoController@inscricao');
    Route::get('inscricoes', 'EventoController@inscricoes');
});
