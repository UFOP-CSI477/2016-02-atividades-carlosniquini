<?php

namespace App\Http\Controllers;

use App\Evento;
use App\Registro;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use DB;

class EventoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct(){
        $this->middleware('auth', ['except' => 'index']);
        //$this->middleware('auth');
    }

    public function index()
    {
        return view('eventos.index');
    }

    public function inscricao(){
        $eventos = DB::table('eventos')->orderBy('data')->get();
        return view('eventos.inscricao') -> with('eventos', $eventos);
    }

    public function inscricoes(){
        $inscricoes = Registro::with('evento', 'atleta')->where('atleta_id', Auth::user()->id)->get()->sortByDesc('data');
        //return $inscricoes;
        //$inscricoes = DB::table('registros')->where('atleta_id', Auth::user()->id)->get();
        return view('eventos.inscricoes') -> with('inscricoes', $inscricoes);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Evento  $evento
     * @return \Illuminate\Http\Response
     */
    public function show(Evento $evento)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Evento  $evento
     * @return \Illuminate\Http\Response
     */
    public function edit(Evento $evento)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Evento  $evento
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Evento $evento)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Evento  $evento
     * @return \Illuminate\Http\Response
     */
    public function destroy(Evento $evento)
    {
        //
    }
}
