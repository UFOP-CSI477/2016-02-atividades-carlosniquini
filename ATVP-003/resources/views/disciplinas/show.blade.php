@extends('layout.principal')

@section('conteudo')
	<br>
	<div class="panel panel-default">
		<div class="panel-body">
			<center><h2>Exibir Disciplina</h2></center>
			<form method="post" action="/disciplinas/{{$disciplina->id}}">
				
				{{ method_field('DELETE') }}
				{{ csrf_field() }}
				<div class="form-group">
					<label for="nome">Nome: </label>
					{{$disciplina->nome}}
				</div>
				
				<div class="form-group">
					<label for="codigo">Código: </label>
					{{$disciplina->codigo}}
				</div>
				
				<div class="form-group">
					<label for="carga">Carga: </label>
					{{$disciplina->carga}}"
				</div>
				
				<a href="/disciplinas" class="btn btn-primary">Voltar</a>
				<input type="submit" value="Excluir" class="btn btn-danger" /> 
			</form>
		</div>
	</div>
	
@endsection