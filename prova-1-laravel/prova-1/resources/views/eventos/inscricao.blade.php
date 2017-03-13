@extends('layout.principal')
    @section('leftmenu')
	    <div class="col-sm-2 sidenav">
	      	<p><a href="/atletas/inscricao">Nova Inscrição</a></p>
            <p><a href="/atletas/inscricoes">Eventos Inscritos</a></p>
	    </div>
    @endsection

    @section('conteudo')
        <div class="title m-b-md">
            <center><h1>Inscrição<h1></center>
        </div>

        <form method="post" action="/registro">
        
            {{ csrf_field() }}
            <div class="form-group">
                <label for="evento">Evento</label>
                <select class="form-control" name="evento" id="evento" required>
                    @foreach($eventos as $e)
                        <option value="{{$e->id}}">{!!  $e->nome !!} - R$ {!! $e->preco !!}</option>
                    @endforeach
                </select>
            </div>
            
            <div class="form-group">
                <label for="data">Data</label>
                <input type="date" class="form-control" name="data" required/>
            </div>
            <div class="form-group">
                <label for="pago">Pagamento realizado?</label>
                <input type="radio" name="pago" value=1>SIM <input type="radio" name="pago" value=0 checked>NÃO
            </div>
            
            <input type="submit" value="Realizar Inscrição" class="btn btn-primary"/>
        </form>
    @endsection