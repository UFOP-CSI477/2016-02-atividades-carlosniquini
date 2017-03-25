<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Aluno;
use Illuminate\Support\Facades\Auth;
use App\Cidade;

class AlunoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct(){
        //$this->middleware('auth', ['except' => 'index']);
        $this->middleware('auth');
    }

    public function index()
    {
        if(Auth::user()->type == 1){
            $alunos = Aluno::all();
    		// $alunos = DB::table('alunos')->get();
    		return view('alunos.index')->with('alunos', $alunos);
        }
        session()->flash('error', 'Aluno: acesso não autorizado!');
        return redirect('/home');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cidades = Cidade::all();
        return view('alunos.create')->with('cidades', $cidades);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Aluno::create($request->all());
        session()->flash('info', 'Aluno adicionado com sucesso!');
        return redirect('/alunos');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $alunos = Aluno::find($id);
        return view('alunos.show')->with('alunos', $alunos);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $aluno = Aluno::find($id);
        $cidades = Cidade::all();
        return view('alunos.edit')->with('aluno', $aluno)->with('cidades', $cidades);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $aluno = Aluno::find($id);
        $aluno->nome = $request->nome;
        $aluno->rua = $request->rua;
        $aluno->bairro= $request->bairro;
        $aluno->numero= $request->numero;
        $aluno->cep= $request->cep;
        $aluno->mail= $request->mail;
        $aluno->save();
        session()->flash('info', 'Aluno editado com sucesso!');
        return redirect('/alunos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Aluno::destroy($id);
        session()->flash('info', 'Aluno excluido com sucesso!');
        return redirect('alunos');
    }
}
