<?php

namespace App\Http\Controllers;

use App\Produto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProdutoController extends Controller
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
        $produtos = Produto::all();
        //return $produtos[0];
        return view('welcome')-> with('p', $produtos);
    }

    public function list()
    {
        if(Auth::user()->type > 1){
            $produtos = Produto::all();
            //return $produtos[0];
            return view('produtos.list')-> with('produtos', $produtos);
        }
        session()->flash('warning', 'Acesso negado!');
        return redirect('/');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if(Auth::user()->type == 2) return view('produtos.create');
        session()->flash('warning', 'Acesso negado!');
        return redirect('/adm');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if(Auth::user()->type == 2){
            Produto::create($request->all());
            session()->flash('info', 'Produto adicionado com sucesso!');
            return redirect('/adm');
        }
        session()->flash('warning', 'Acesso negado!');
        return redirect('/adm');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Produto  $produto
     * @return \Illuminate\Http\Response
     */
    public function show(Produto $produto)
    {
        if(Auth::user()->type == 2){
            $produto = Produto::find($produto);
            return view ('produtos.show')->with('produto', $produto);
        }
        session()->flash('warning', 'Acesso negado!');
        return redirect('/adm');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Produto  $produto
     * @return \Illuminate\Http\Response
     */
    public function edit(Produto $produto)
    {
        if(Auth::user()->type > 1){
            $produto = Produto::find($produto);
            return view('produtos.edit')->with('produto', $produto);
        }
        session()->flash('warning', 'Acesso negado!');
        return redirect('/adm');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Produto  $produto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Produto $produto)
    {
        if(Auth::user()->type > 1){
            $produto = Produto::find($produto);
            $produto->name = $request->name;
            $produto->preco = $request->preco;
            $produto->image = $request->image;
            $produto->save();
            session()->flash('info', 'Produto editado com sucesso!');
            return redirect('/adm');
        }
        session()->flash('warning', 'Acesso negado!');
        return redirect('/adm');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Produto  $produto
     * @return \Illuminate\Http\Response
     */
    public function destroy($produto)
    {
        if(Auth::user()->type == 2){
            Produto::destroy($produto);
            session()->flash('info', 'Produto excluido com sucesso!');
            return redirect('/adm');
        }
        session()->flash('warning', 'Acesso negado!');
        return redirect('/adm');
    }
}
