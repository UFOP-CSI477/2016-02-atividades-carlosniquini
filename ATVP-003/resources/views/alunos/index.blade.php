@extends('layout.principal')

@section('conteudo')
	<br>
	<div class="panel panel-default">
		<div class="panel-body">
			<center><h2>Alunos</h2></center>
			<a href="/alunos/create" class="btn btn-primary">Inserir</a>
			<table class="table table-striped">
				<thead>
					<tr>
						<th>Nome</th>
						<th>Cidade</th>
						<th>Editar</th>
					</tr>
				</thead>
				<tbody>
					@foreach($alunos as $a)
						<tr>
						<td><a href="/alunos/{{ $a->id}}">{{ $a->nome}}</a></td><td>{{ $a->cidade()->value('nome')}}</td><td><a href="{{url('/alunos/' .$a->id. '/edit')}}" class="btn">Editar</a></td>
					@endforeach

			</table>
		</div>
	</div>

@endsection