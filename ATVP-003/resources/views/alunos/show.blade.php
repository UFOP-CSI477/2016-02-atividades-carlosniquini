@extends('layout.principal')

@section('conteudo')
	<br>
	<div class="panel panel-default">
		<div class="panel-body">
			<center><h2>Exibir Aluno</h2></center>
			<form method="post" action="/alunos/{{$alunos->id}}">
				
				{{ method_field('DELETE') }}
				{{ csrf_field() }}
				<div class="form-group">
					<label for="nome">Nome: </label>
					{{$alunos->nome}}
				</div>
				<div class="form-group">
					<label for="nome">Cidade: </label>
					{{$alunos->cidade()->value('nome')}}
				</div>
				
				<a href="/alunos" class="btn btn-primary">Voltar</a>
				<input type="submit" value="Excluir" class="btn btn-danger" /> 
			</form>
		</div>
	</div>
	
@endsection