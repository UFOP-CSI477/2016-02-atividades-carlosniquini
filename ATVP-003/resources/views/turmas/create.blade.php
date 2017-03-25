@extends('layout.principal')

@section('conteudo')
	<br>
	<div class="panel panel-default">
		<div class="panel-body">
			<center><h2>Inserir Turma</h2></center>
			<form method="post" action="/turmas">
				
				{{ csrf_field() }}
				<div class="form-group">
					<label for="nome">Nome</label>
					<input type="text" class="form-control" name="nome" />
				</div>
				
				<div class="form-group">
				<select name="disciplina_id" class="form-control">
				@foreach($disciplinas as $e)
					<option name="disciplina_id" value="{{$e->id}}">{{$e->nome}} </option>
				 @endforeach
				</select>
				</div>
				
				<a href="/turmas" class="btn btn-warning">Voltar</a>
				<input type="submit" value="Salvar" class="btn btn-primary"/>
			</form>
		</div>
	</div>
	
@endsection