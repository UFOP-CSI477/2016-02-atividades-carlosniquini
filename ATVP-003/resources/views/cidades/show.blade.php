@extends('layout.principal')

@section('conteudo')
	<br>
	<div class="panel panel-default">
		<div class="panel-body">
			<center><h2>Exibir Cidade</h2></center>
			<form method="post" action="/cidades/{{$cidade->id}}">
				
				{{ method_field('DELETE') }}
				{{ csrf_field() }}
				<div class="form-group">
					<label for="nome">Nome: </label>
					{{$cidade->nome}}
				</div>
				<div class="form-group">
					<label for="nome">Estado: </label>
					{{$cidade->estado()->value('nome')}}
				</div>
				
				<a href="/cidades" class="btn btn-primary">Voltar</a>
				<input type="submit" value="Excluir" class="btn btn-danger" /> 
			</form>
		</div>
	</div>
	
@endsection