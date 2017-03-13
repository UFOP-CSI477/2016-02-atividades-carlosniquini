<?php

namespace App\Http\Controllers;

use App\Adm;
use Illuminate\Http\Request;
use DB;
use App\User;
use App\Registro;

class AdmController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('adm.index');
    }

    public function registros()
    {
        //$registros = Registro::with('evento', 'user')->get();
        $registros = DB::table('registros')->get();
        $usuarios = DB::table('users')->get();
        return view(adm.registros);
        return $registros;
        //db($usuarios);
    }

    public function eventos(){
        return "Eventos";
    }

    public function atletas_eventos(){
        return "atletas_eventos";
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
     * @param  \App\Adm  $adm
     * @return \Illuminate\Http\Response
     */
    public function show(Adm $adm)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Adm  $adm
     * @return \Illuminate\Http\Response
     */
    public function edit(Adm $adm)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Adm  $adm
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Adm $adm)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Adm  $adm
     * @return \Illuminate\Http\Response
     */
    public function destroy(Adm $adm)
    {
        //
    }
}
