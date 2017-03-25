<?php
//Criar modelo para Estados -> Cidades
//Route -> model
//Comando para criar modelos
// php artisan make:model Aluno

// php artisan tinker
// $aluno = DB::table('alunos')->get()
// App\Aluno::all()
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

Route::get('/', function(){
	return view('home');
});

Route::get('/home', function(){
	return redirect('/');
});

Route::resource('disciplinas', 'DisciplinaController');

Route::resource('turmas', 'TurmaController');

Route::resource('alunos', 'AlunoController');

Route::resource('cidades', 'CidadeController');

Route::resource('estados', 'EstadoController');

/*
Route::get('estados', function () {
	$estado = DB::table('estados')->get();
	return $estado;
});

Route::get('alunos/{aluno}', function($id){
	$alunos = DB::table('alunos')->find($id);
	return view('alunos.show')->with('alunos', $alunos);
});
*/
Auth::routes();



