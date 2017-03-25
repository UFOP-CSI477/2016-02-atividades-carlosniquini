@extends('layout.principal')

@section('conteudo')
	<br>
	<div class="panel panel-default">
		<div class="panel-body">
			<center><h2>Editar Turma</h2></center>
			<form method="post" action="/turmas/{{$turma->id}}">
				
				{{ method_field('PATCH') }}
				{{ csrf_field() }}
				<div class="form-group">
					<label for="nome">Nome</label>
					<input type="text" class="form-control" name="nome" value="{{$turma->nome}}" />
				</div>
				
				<div class="form-group">
					<label for="disciplina_id">Disciplina</label>
					<select name="disciplina_id" class="form-control">
					@foreach($disciplinas as $e)
						@if($e->id == $turma->disciplina_id)
							<option name="disciplina_id"  selected value="{{$e->id}}">{{$e->nome}} </option>
						@else
							<option name="disciplina_id" value="{{$e->id}}">{{$e->nome}} </option>
						@endif
					@endforeach
					</select>
				</div>
				
				<a href="/turmas" class="btn btn-warning">Voltar</a>
				<input type="submit" value="Salvar" class="btn btn-primary"/>
			</form>
		</div>
	</div>
	
@endsection