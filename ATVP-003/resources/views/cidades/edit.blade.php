@extends('layout.principal')

@section('conteudo')
	<br>
	<div class="panel panel-default">
		<div class="panel-body">
			<center><h2>Editar Cidade</h2></center>
			<form method="post" action="/cidades/{{$cidade->id}}">
				
				{{ method_field('PATCH') }}
				{{ csrf_field() }}
				<div class="form-group">
					<label for="nome">Nome da Cidade</label>
					<input type="text" class="form-control" name="nome" value="{{$cidade->nome}}" />
				</div>

			    <div id="estado_id" class="form-group">
			    	<label for="estado_id">Estado</label>
			        <select name="estado_id" class="form-control">
			          @foreach($estados as $e)
			          @if($e->id == $cidade->estado_id)
			           <option name="estado_id"  selected value="{{$e->id}}">{{$e->nome}} </option>
			           @else
			            <option name="estado_id" value="{{$e->id}}">{{$e->nome}} </option>
			            @endif
			           @endforeach
			      </select>
			    </div>
				<br>
				<a href="/cidades" class="btn btn-warning">Voltar</a>
				<input type="submit" value="Salvar" class="btn btn-primary"/>
			</form>
		</div>
	</div>
	
@endsection