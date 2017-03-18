@extends('layout.cliente')

@section('conteudo')
	<center><h2> Seu Carrinho de Compras</h2></center>
	<table class="table table-striped">
		<thead>
			<tr>
				<th>Produto</th>
				<th>Preço</th>
				<th>Qtd</th>
			</tr>
		</thead>
			<?php $total = 0; ?>
			@foreach($produtos as $p)
				<tr>
				<td>{{ $p->name}}</td><td>{{ $p->preco}}</td><td>1</td>
				<?php $total = $p->preco + $total; ?>
			@endforeach
				<tr>
				<td><b>Total</b></td><td><b>{{$total}}</b></td>
		<tbody>
	</table>
	<a href="/comprar/create" class="btn btn-primary">Comprar</a> <a href="/carrinho/limpar" class="btn btn-warning">Limpar</a>
@endsection