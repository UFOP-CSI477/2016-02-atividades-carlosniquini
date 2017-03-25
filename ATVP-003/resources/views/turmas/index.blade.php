@extends('layout.principal')

@section('conteudo')
	<br>
	<div class="panel panel-default">
		<div class="panel-body">
			<center><h2>Turmas</h2></center>
			<a href="/turmas/create" class="btn btn-primary">Inserir</a>
			<table class="table table-striped">
				<thead>
					<tr>
						<th>Nome</th>
						<th>Disciplina</th>
						<th>Editar</th>
					</tr>
				</thead>
				<tbody>
					@foreach($turmas as $t)
						<tr>
						<td><a href="/turmas/{{ $t->id}}">{{ $t->nome}}</a></td><td>{{ $t->disciplina()->value('nome')}}</td><td><a href="{{url('/turmas/' .$t->id. '/edit')}}" class="btn">Editar</a></td>
					@endforeach

			</table>
		</div>
	</div>

@endsection