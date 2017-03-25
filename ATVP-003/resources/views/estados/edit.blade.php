@extends('layout.principal')

@section('conteudo')
	<br>
	<div class="panel panel-default">
		<div class="panel-body">
			<center><h2>Editar Estado</h2></center>
			<form method="post" action="/estados/{{$estado->id}}">
				
				{{ method_field('PATCH') }}
				{{ csrf_field() }}
				<div class="form-group">
					<label for="nome">Nome</label>
					<input type="text" class="form-control" name="nome" value="{{$estado->nome}}" />
				</div>
				
				<div class="form-group">
					<label for="sigla">Sigla</label>
					<input type="text" class="form-control" name="sigla" value="{{$estado->sigla}}" />
				</div>
				
				<a href="/estados" class="btn btn-warning">Voltar</a>
				<input type="submit" value="Salvar" class="btn btn-primary"/>
			</form>
		</div>
	</div>
	
@endsection