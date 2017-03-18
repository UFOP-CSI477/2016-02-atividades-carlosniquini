<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="/css/bootstrap.min.css">
  <script src="/js/jquery.min.js"></script>
  <script src="/js/bootstrap.min.js"></script>
  <style>
    /* Remove the navbar's default rounded borders and increase the bottom margin */ 
    .navbar {
      margin-bottom: 50px;
      border-radius: 0;
    }
    
    /* Remove the jumbotron's default bottom margin */ 
     .jumbotron {
      margin-bottom: 0;
    }
   
    /* Add a gray background color and some padding to the footer */
    footer {
      background-color: #222;
      padding: 25px;
    }
    .bgimg {
      background-image: url('../bkg.jpg');
    }
  </style>
</head>
<body>

<div class="jumbotron  bgimg">
  <div class="container text-center">
    <h1><font color="#ff1a1a">Pet Shop</font></h1>      
    <p><font color="#ff1a1a">Pet é família!</font></p>
  </div>
</div>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="/">LOGO</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li><a href="/">Home</a></li>
        <li><a href="/cliente">Área do Cliente</a></li>
        <li><a href="/adm">Área Administrativa</a></li>
        <li><a href="#">Contato</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        @if (Auth::guest())
          <li><a href="{{ url('/login') }}">Login</a></li>
          <li><a href="{{ url('/register') }}">Register</a></li>
          @else
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                {{ Auth::user()->name }} <span class="caret"></span>
              </a>
              <ul class="dropdown-menu" role="menu">
                <li>
                  <a href="{{ url('/logout') }}"
                    onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                    Logout
                  </a>
                  <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                  </form>
                </li>
              </ul>
            </li>
        @endif
        <li><a href="/cliente/carrinho"><span class="glyphicon glyphicon-shopping-cart"></span> Carrinho</a></li>
      </ul>
    </div>
  </div>
</nav>
<div class="container-fluid text-center">    
  <div class="row content">
    <div class="col-sm-2 sidenav">
      <ul class="nav navbar nav-pills nav-stacked navbar-inverse">
        <li><a href="{{url('/users/' .Auth::user()->id. '/edit')}}">Editar Informações</a></li>
        <li><a href="/cliente/historico">Historico</a></li>
        <li><a href="/cliente/carrinho">Finalizar Compra</a></li>
      </ul>
    </div>
    <div class="col-sm-10 text-left">
      @if(Session::has('info'))
        <div class="alert alert-info">{{ Session::get('info') }}</div>
      @endif
      @if(Session::has('warning'))
        <div class="alert alert-warning">{{ Session::get('warning') }}</div>
      @endif
      @yield('conteudo')
    </div>
  </div>
</div>
<br><br><br><br>
<footer class="container-fluid text-center ">
  <p><font color="#ffffff">Sistemas para Web - Carlos Niquini - 12.2.8346</font></p>  
</footer>

</body>
</html>
