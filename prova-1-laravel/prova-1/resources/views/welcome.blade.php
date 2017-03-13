@extends('layout.principal')
    @section('leftmenu')
	    
        <div class="col-sm-2 sidenav">
	      	<!--
            <p><a href="/disciplinas">Disciplinas</a></p>
	      	<p><a href="/turmas">Turmas</a></p>
	      	<p><a href="/estados">Estados</a></p>
		  	<p><a href="/alunos">Alunos</a></p>
            -->
	    </div>
    @endsection

    @section('conteudo')
        <center><h1>Eventos</h1></center>
        <table class="table table-striped">
        <thead>
            <tr>
                <th>Nome</th>
                <th>Preço</th>
                <th>Data</th>
            </tr>
        </thead>
        <tbody>
           @foreach($eventos as $e)
                <tr>
                <td>{{ $e->nome}}</td><td>{{ $e->preco}}</td><td>{{ $e->data}}</td>
            @endforeach
    </table>
    @endsection