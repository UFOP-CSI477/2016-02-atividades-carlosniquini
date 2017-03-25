@extends('layout.principal')

@section('conteudo')
	<br>
	<div class="panel panel-default">
		<div class="panel-body">
			<center><h2>Exibir Estado</h2></center>
			<form method="post" action="/estados/{{$estado->id}}">
				
				{{ method_field('DELETE') }}
				{{ csrf_field() }}
				<div class="form-group">
					<label for="nome">Nome: </label>
					{{$estado->nome}}
				</div>
				
				<div class="form-group">
					<label for="sigla">Código: </label>
					{{$estado->sigla}}
				</div>
				
				<a href="/estados" class="btn btn-primary">Voltar</a>
				<input type="submit" value="Excluir" class="btn btn-danger" /> 
			</form>
		</div>
	</div>
	
@endsection