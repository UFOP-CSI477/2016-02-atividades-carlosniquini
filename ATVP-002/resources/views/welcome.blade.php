@extends('layout.principal')

	@section('conteudo_1')
	<?php 
		//$c = session()->get('nome', 0);
		//$i = 0;
		for( $i = 0; $i<count($p); $i+=3 ){ ?>
		<div class="container">    
  			<div class="row">
  				<?php
  				if (isset($p[$i])){ ?>
				<div class="col-sm-4">
			      <div class="panel panel-primary">
			        <div class="panel-heading">{{ $p[$i]->name }}</div>
			        <div class="panel-body"><img src="/images/{{$p[$i]->image}}" class="img-responsive" style="width:100%" alt="Image"></div>
			        <div class="panel-footer">Por apenas: <h2>R${{$p[$i]->preco}}</h2><a href="/carrinho/{{$p[$i]->id}}"><span class="glyphicon glyphicon-shopping-cart"></span> Add</a></div>
			      </div>
			    </div>
			    <?php }
			    if (isset($p[$i+1])){ ?>
			    <div class="col-sm-4">
			      <div class="panel panel-primary">
			        <div class="panel-heading">{{ $p[$i+1]->name }}</div>
			        <div class="panel-body"><img src="/images/{{$p[$i+1]->image}}" class="img-responsive" style="width:100%" alt="Image"></div>
			        <div class="panel-footer">Por apenas: <h2>R${{$p[$i+1]->preco}}</h2><a href="/carrinho/{{$p[$i+1]->id}}"><span class="glyphicon glyphicon-shopping-cart"></span> Add</a></div>
			      </div>
			    </div>
			    <?php }
			    if (isset($p[$i+2])){ ?>
			    <div class="col-sm-4">
			      <div class="panel panel-primary">
			        <div class="panel-heading">{{ $p[$i+2]->name }}</div>
			        <div class="panel-body"><img src="/images/{{$p[$i+2]->image}}" class="img-responsive" style="width:100%" alt="Image"></div>
			        <div class="panel-footer">Por apenas: <h2>R${{$p[$i+2]->preco}}</h2><a href="/carrinho/{{$p[$i+2]->id}}"><span class="glyphicon glyphicon-shopping-cart"></span> Add</a></div>
			      </div>
			    </div>
			    <?php } ?>
			</div>
		</div><br>	 
    <?php
     } ?>
    @endsection
    