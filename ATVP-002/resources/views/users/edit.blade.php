@extends('layout.cliente')

@section('conteudo')
	<center><h2> Editar Informações</h2></center>

	<form method="post" action="/users/{{Auth::user()->id}}">
		
		{{ method_field('PATCH') }}
		{{ csrf_field() }}
		<div class="form-group">
			<label for="name">Nome</label>
			<input type="text" class="form-control" name="name" value="{{Auth::user()->name}}" />
		</div>
		
		<div class="form-group">
			<label for="email">Email</label>
			<input type="text" class="form-control" name="email" value="{{Auth::user()->email}}" />
		</div>
		
		<div class="form-group">
			<label for="">Senha antiga</label>
			<input type="password" class="form-control" name="password-old" />
		</div>

		<div class="form-group">
			<label for="password">Nova senha</label>
			<input type="password" class="form-control" name="password" />
		</div>
		
		<a href="/cliente" class='btn btn-warning'>Voltar</a>
		<input type="submit" class='btn btn-primary' value="Salvar" />
	</form>

@endsection