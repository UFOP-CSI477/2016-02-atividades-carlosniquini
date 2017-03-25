@extends('layout.principal')

@section('conteudo')
	<br>
	<div class="panel panel-default">
		<div class="panel-body">
			<center><h2>Inserir Aluno</h2></center>
			<form method="post" action="/alunos">
				
				{{ csrf_field() }}
				<div class="form-group">
					<label for="nome">Nome</label>
					<input type="text" class="form-control" name="nome" />
				</div>
				<div class="form-group">
					<label for="rua">Rua</label>
					<input type="text" class="form-control" name="rua" />
				</div>
				<div class="form-group">
					<label for="bairro">Bairro</label>
					<input type="text" class="form-control" name="bairro" />
				</div>
				<div class="form-group">
					<label for="numero">Numero</label>
					<input type="number" class="form-control" name="numero" />
				</div>
				<div class="form-group">
					<label for="cep">CEP</label>
					<input type="text" class="form-control" name="cep" />
				</div>
				<div class="form-group">
					<label for="mail">E-mail</label>
					<input type="text" class="form-control" name="mail" />
				</div>
				<div id="cidade_id" class="form-group">
					<label for="cidade_id">Cidade</label>
					<select name="cidade_id" class="form-control">
						@foreach($cidades as $e)
						<option name="cidade_id" value="{{$e->id}}">{{$e->nome}} </option>
					 	@endforeach
					</select>
				</div>
				
				<a href="/alunos" class="btn btn-warning">Voltar</a>
				<input type="submit" value="Salvar" class="btn btn-primary"/>
			</form>
		</div>
	</div>
	
@endsection