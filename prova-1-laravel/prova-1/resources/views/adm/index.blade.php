@extends('layout.principal')
    @section('leftmenu')
	    <div class="col-sm-2 sidenav">
	      	<p><a href="/relatorios/registros">Registros</a></p>
	      	<p><a href="/relatorios/eventos">Eventos</a></p>
            <p><a href="/relatorios/atleta_eventos">Atletas/Eventos</a></p>
	    </div>
    @endsection

    @section('conteudo')
        <div class="title m-b-md">
            <center><h1>Relatorios<h1></center>
        </div>
    @endsection