<?php

namespace App\Http\Controllers;

use App\Produto;
use App\User;
use App\Compra;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use DB;
use Hash;

class UserController extends Controller
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
       return view('users.index');
    }

    public function historico(){
        //$compras = DB::table('compras')->where('user_id', Auth::user()->id)->get();
        $compras = Compra::with('produto', 'user')->where('user_id', Auth::user()->id)->get();
        //return $compras;
        return view('users.historico')->with('compras', $compras);
    }

    public function addTo(){
        return view('/');
    }

    public function carrinho(){
        $carrinho =  session()->get('carrinho');
        $produtos = array();
        if(empty($carrinho)){
            session()->flash('warning', 'Carrinho vazio!');
            return redirect('/');
        }
        foreach ($carrinho as $id) {
            $p = Produto::find($id);
            array_push($produtos, $p);
        }
        //return $produtos;        
        return view('users.carrinho')->with('produtos', $produtos);
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
     * @param  \App\Produto  $produto
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Produto  $produto
     * @return \Illuminate\Http\Response
     */
    public function edit(User $id)
    {
        //if(Auth::user()->id == $id){
        //$compras = DB::table('compras')->where('user_id', Auth::user()->id)->get();

        $user = DB::table('users')->where('id', Auth::user()->id)->get();
        //return $user;
        return view('users.edit')->with('user', $user);
        //}
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Produto  $produto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $user = User::where('id', Auth::user()->id)->first();
        $password_old = $request['password-old'];
        if(Hash::check($password_old, $user->password)){
            $user_emails_json = DB::table('users')->where('email', Auth::user()->email)->get();
            $user_emails_array = json_decode($user_emails_json, true);
            if(count($user_emails_array) == 1){
                $user = User::find(Auth::user()->id);
                $user->name = $request->name;
                $user->email = $request->email;
                $user->password = bcrypt($request['password']);
                $user->save();
                session()->flash('info', 'Informações modificadas com sucesso!');
                return redirect('/cliente');
            }
            session()->flash('warning', 'Email usado por outro usuario!');
            return redirect('/cliente');
        }
        session()->flash('warning', 'Senha incorreta!');
        return redirect('/cliente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Produto  $produto
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
    }
}
