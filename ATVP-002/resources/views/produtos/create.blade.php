@extends('layout.produto')

@section('conteudo')
	<center><h2> Adicionar Produto</h2></center>

	<form method="post" action="/produtos">
		
		{{ csrf_field() }}
		<div class="form-group">
			<label for="name">Nome</label>
			<input type="text" class="form-control" name="name"/>
		</div>
		
		<div class="form-group">
			<label for="preco">Preço</label>
			<input type="text" class="form-control" name="preco"/>
		</div>
		
		<div class="form-group">
			<label for="image">Img Path</label>
			<input type="text" class="form-control" name="image"/>
		</div>
		
		<center>
			<a href="/adm" class="btn btn-warning">Voltar</a>
			<input type="submit" value="Salvar" class="btn btn-primary" />
		</center>
	</form>

@endsection