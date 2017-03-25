@extends('layout.principal')

@section('conteudo')
	<br>
	<div class="panel panel-default">
		<div class="panel-body">
			<center><h2>Exibir Turma</h2></center>
			<form method="post" action="/turmas/{{$turma->id}}">
				
				{{ method_field('DELETE') }}
				{{ csrf_field() }}
				<div class="form-group">
					<label for="nome">Nome: </label>
					{{$turma->nome}}
				</div>
				
				<div class="form-group">
					<label for="codigo">Disciplina: </label>
					{{$turma->disciplina->value('nome')}}
				</div>
				
				<a href="/turmas" class="btn btn-primary">Voltar</a>
				<input type="submit" value="Excluir" class="btn btn-danger" /> 
			</form>
		</div>
	</div>
	
@endsection