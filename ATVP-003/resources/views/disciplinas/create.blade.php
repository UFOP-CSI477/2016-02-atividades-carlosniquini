@extends('layout.principal')

@section('conteudo')
	<br>
	<div class="panel panel-default">
		<div class="panel-body">
			<center><h2>Inserir Disciplina</h2></center>
			<form method="post" action="/disciplinas">
				
				{{ csrf_field() }}
				<div class="form-group">
					<label for="nome">Nome</label>
					<input type="text" class="form-control" name="nome" />
				</div>
				
				<div class="form-group">
					<label for="codigo">Código</label>
					<input type="text" class="form-control" name="codigo" />
				</div>
				
				<div class="form-group">
					<label for="carga">Carga</label>
					<input type="text" class="form-control" name="carga" />
				</div>
				
				<a href="/disciplinas" class="btn btn-warning">Voltar</a>
				<input type="submit" value="Salvar" class="btn btn-primary"/>
			</form>
		</div>
	</div>
	
@endsection