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

Auth::routes();

Route::get('/', 'ProdutoController@index');

Route::get('/adm', 'ProdutoController@list');

Route::group(['prefix' => 'cliente'], function (){
    Route::get('', 'UserController@index');
    Route::get('historico', 'UserController@historico');
    Route::get('carrinho', 'UserController@carrinho');
    //Route::get('inscricoes', 'EventoController@inscricoes');
});
Route::resource('users', 'UserController');
Route::resource('produtos', 'ProdutoController');
Route::get('/carrinho/limpar', function(){
	session()->forget('carrinho');
	return redirect('/');
});
Route::get('/carrinho/{produto}', function($id){
	if(Auth::guest()){
		session()->flash('warning', 'Realize o login para adicionar produtos no carrinho.');
		return redirect('/');
	}
	$c = session()->get('carrinho', array());
	array_push($c, $id);
	session(['carrinho' => $c]);
	//$c =  Session::get('carrinho');
	//return $c;
	session()->flash('info', 'Produto adicionado com sucesso!');
	return redirect('/');
});

Route::resource('comprar', "CompraController");
//Route::resource('carrinho', 'CarrinhoController');
//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/home', function(){
	return redirect('/');
});
