@extends('layout.cliente')

@section('conteudo')
	<center><h2> Historico de Compras</h2></center>
	<table class="table table-striped">
		<thead>
			<tr>
				<th>Produto</th>
				<th>Preço</th>
				<th>Qtd</th>
				<th>Data</th>
			</tr>
		</thead>
		<tbody>
			@foreach($compras as $c)
				<tr>
				<td>{{ $c->produto->name }}</td><td>{{ $c->produto->preco}}</td><td>{{ $c->quantidade}}</td><td>{{ $c->data }}</td>
			@endforeach
				<tr>
	</table>
@endsection