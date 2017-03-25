@extends('layout.principal')

@section('conteudo')
	<br>
	<div class="panel panel-default">
		<div class="panel-body">
			<center><h2>Estados</h2></center>
			<a href="/estados/create" class="btn btn-primary">Inserir</a>
			<table class="table table-striped">
				<thead>
					<tr>
						<th>Nome</th>
						<th>Sigla</th>
						<th>Editar</th>
					</tr>
				</thead>
				<tbody>
					@foreach($estados as $e)
						<tr>
						<td><a href="/estados/{{ $e->id}}">{{ $e->nome}}</a></td><td>{{ $e->sigla}}</td><td><a href="{{url('/estados/' .$e->id. '/edit')}}" class="btn">Editar</a></td>
					@endforeach

			</table>
		</div>
	</div>

@endsection