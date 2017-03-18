@extends('layout.produto')

@section('conteudo')
	<center><h2> Excluir Produto</h2></center>

	<form method="post" action="/produtos/{{$produto->id}}">
		
		{{ method_field('DELETE') }}
		{{ csrf_field() }}
		<div class="form-group">
			<label for="name">Nome</label>
			{{$produto->name}}
		</div>
		
		<div class="form-group">
			<label for="preco">Preço</label>
			{{$produto->preco}}
		</div>
		
		<div class="form-group">
			<label for="image">Img Path</label>
			{{$produto->image}}
		</div>
		
		<center>
			<a href="/adm" class="btn btn-warning">Voltar</a>
			<input type="submit" value="Excluir" class="btn btn-danger" />
		</center>
	</form>

@endsection