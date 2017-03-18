@extends('layout.produto')

@section('conteudo')
	<center><h2> Bando de Dados de Produtos</h2></center>
	<a href="/produtos/create" class="btn btn-primary">Inserir</a>
	<table class="table table-striped">
		<thead>
			<tr>
				<th>Produto</th>
				<th>Preço</th>
				<th>Img Path</th>
				<th>Editar</th>
				<th>Excluir</th>
			</tr>
		</thead>
			@foreach($produtos as $p)
				<tr>
				<td>{{ $p->name }}</td><td>{{ $p->preco}}</td><td>{{ $p->image}}</td><td><a href="{{url('/produtos/' .$p->id. '/edit')}}" class="btn">Editar</a></td><td><a href="/produtos/{{ $p->id }}" class="btn">Excluir</a></td>
			@endforeach
		<tbody>
	</table>

@endsection