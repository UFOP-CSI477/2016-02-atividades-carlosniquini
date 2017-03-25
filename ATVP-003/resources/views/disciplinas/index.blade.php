@extends('layout.principal')

@section('conteudo')
	<br>
	<div class="panel panel-default">
		<div class="panel-body">
			<center><h2>Disciplinas</h2></center>
			<!--
			@if(Session::has('nome'))
				<h2>{{ Session::get('nome')}}</h2>
			@endif
			-->			
			<a href="/disciplinas/create" class="btn btn-primary">Inserir</a>
			<table class="table table-striped">
				<thead>
					<tr>
						<th>Nome</th>
						<th>Código</th>
						<th>CH</th>
						<th>Editar</th>
					</tr>
				</thead>
				<tbody>
					@foreach($disciplinas as $d)
						<tr>
						<td><a href="/disciplinas/{{ $d->id}}">{{ $d->nome}}</a></td><td>{{ $d->codigo}}</td><td>{{ $d->carga}}</td><td><a href="{{url('/disciplinas/' .$d->id. '/edit')}}" class="btn">Editar</a></td>
					@endforeach

			</table>
		</div>
	</div>

@endsection