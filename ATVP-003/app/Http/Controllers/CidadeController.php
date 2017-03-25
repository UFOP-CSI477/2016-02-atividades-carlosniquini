<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Estado;
use App\Aluno;
use Illuminate\Support\Facades\Auth;
use App\Cidade;

class CidadeController extends Controller
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
            $cidades = Cidade::all();
            // $alunos = DB::table('alunos')->get();
            return view('cidades.index')->with('cidades', $cidades);
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
        //$estado = Estado::all();
        $estado = Estado::orderBy('nome', 'desc')->get();
        return view('cidades.create')->with('estados', $estado);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Cidade::create($request->all());
        session()->flash('info', 'Cidade adicionada com sucesso!');
        return redirect('/cidades');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $cidade = Cidade::find($id);
        return view('cidades.show')->with('cidade', $cidade);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cidade = Cidade::find($id);
        $estados = Estado::all();
        return view('cidades.edit')->with('cidade', $cidade)->with('estados', $estados);
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
        $cidade = Cidade::find($id);
        $cidade->nome = $request->nome;
        $cidade->estado_id = $request->estado_id;
        $cidade->save();
        session()->flash('info', 'Cidade editada com sucesso!');
        return redirect('/cidades');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Cidade::destroy($id);
        session()->flash('info', 'Cidade excluida com sucesso!');
        return redirect('cidades');
    }
}
