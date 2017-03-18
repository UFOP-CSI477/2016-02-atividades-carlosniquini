@extends('layout.produto')

@section('conteudo')
	<center><h2> Edição de Produtos</h2></center>

	<form method="post" action="/produtos/{{$produto->id}}">
		
		{{ method_field('PATCH') }}
		{{ csrf_field() }}
		<div class="form-group">
			<label for="name">Nome</label>
			<input type="text" class="form-control" name="name" value="{{$produto->name}}" />
		</div>
		
		<div class="form-group">
			<label for="preco">Preço</label>
			<input type="text" class="form-control" name="preco" value="{{$produto->preco}}" />
		</div>
		
		<div class="form-group">
			<label for="image">Img Path</label>
			<input type="text" class="form-control" name="image" value="{{$produto->image}}" />
		</div>
		
		<input type="submit" value="Salvar" />
	</form>

@endsection