@extends('layout.principal')

@section('conteudo')
	<br>
	<div class="panel panel-default">
		<div class="panel-body">
			<center><h2>Inserir Cidade</h2></center>
			<form method="post" action="/cidades">
				{{ csrf_field() }}
				<div class="form-group">
					<label for="nome">Nome</label>
					<input type="text" class="form-control" name="nome" />
				</div>

				<div class="form-group">
					<label for="estado_id">Estado</label>
					<select name="estado_id" class="form-control">
						@foreach($estados as $e)
						<option name="estado_id" value="{{ $e -> id }}">{{$e->nome}} - {{$e->sigla}}</option>
						@endforeach
					</select>
				</div>
				<a href="/cidades" class="btn btn-warning">Voltar</a>
				<input type="submit" value="Salvar" class="btn btn-primary"/>
			</form>
		</div>
	</div>

@endsection
