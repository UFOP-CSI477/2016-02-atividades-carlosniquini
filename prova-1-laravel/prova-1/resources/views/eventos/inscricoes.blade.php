@extends('layout.principal')
    @section('leftmenu')
	    <div class="col-sm-2 sidenav">
	      	<p><a href="/atletas/inscricao">Nova Inscrição</a></p>
	      	<p><a href="/atletas/inscricoes">Eventos Inscritos</a></p>
	    </div>
    @endsection

    @section('conteudo')
        <div class="title m-b-md">
            <center><h1>Lista de Inscrições<h1></center>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Evento</th>
                        <th>Data</th>
                        <th>Pago</th>
                    </tr>
                </thead>
                <tbody>
                   @foreach($inscricoes as $i)
                        <tr>
                        <td>{{ $i->evento->nome}}</td><td>{{$i->evento->data}}</td><td>@if($i->pago == 1) SIM @else NÃo @endif</td>
                    @endforeach
            </table>
        </div>
    @endsection