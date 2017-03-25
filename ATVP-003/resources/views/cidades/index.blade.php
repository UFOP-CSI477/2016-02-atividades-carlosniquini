@extends('layout.principal')

@section('conteudo')
	<br>
	<div class="panel panel-default">
		<div class="panel-body">
			<center><h2>Cidades</h2></center>
			<a href="/cidades/create" class="btn btn-primary">Inserir</a>
			<table class="table table-striped">
				<thead>
					<tr>
						<th>Cidade</th>
						<th>Estado</th>
						<th>Editar</th>
					</tr>
				</thead>
				<tbody>
					@foreach($cidades as $c)
						<tr>
						<td><a href="/cidades/{{ $c->id}}">{{ $c->nome}}</a></td><td>{{ $c->estado()->value('nome')}}</td><td><a href="{{url('/cidades/' .$c->id. '/edit')}}" class="btn">Editar</a></td>
					@endforeach

			</table>
		</div>
	</div>

@endsection