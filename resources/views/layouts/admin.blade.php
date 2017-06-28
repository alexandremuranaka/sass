<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <link href="https://fonts.googleapis.com/css?family=Oxygen:300,400" rel="stylesheet">

    <link rel="stylesheet" href="{{ elixir('css/gulp.css') }}">
    <script defer type="text/javascript"  src="{{ elixir('js/gulp.js') }}"></script>
</head>
<body>


<section id="header">
	<div class="container-fluid">
		<div class="row">
			<div class="col-xs-12 col-sm-4">
				<a href="/"><img src="/images/bymeds_logo.png" alt="logo bymeds" /></a>
				<div id="btn_menu" class="active">
					<div class="bar top"></div>
					<div class="bar middle"></div>
					<div class="bar bottom"></div>
				</div>
			</div>
			<div class="col-xs-12 col-sm-8">
				<ul>
          @if (Auth::guest())
              <li><a href="{{ route('login') }}">Login</a></li>
              <li><a href="{{ route('register') }}">Register</a></li>
          @else
              <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                      {{ Auth::user()->name }} <span class="caret"></span>
                  </a>

                  <ul class="dropdown-menu" role="menu">
                      <li>
                          <a href="{{ route('logout') }}"
                              onclick="event.preventDefault();
                                       document.getElementById('logout-form').submit();">
                              Logout
                          </a>

                          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                              {{ csrf_field() }}
                          </form>
                      </li>
                  </ul>
              </li>
          @endif
				</ul>
			</div>
		</div>
	</div>
</section>

<div id="menu" class="active">

  <div class="item"><p><a href="home.php"><i class="fa fa-h-square"></i>Início</a></p></div>
  <div class="item"><p><a href="cadastro.php"><i class="fa fa-address-card-o"></i>Cadastro</a></p></div>

  <div class="item father">
    <h3><i class="fa fa-stethoscope"></i>Casos <i class="fa fa-chevron-right active"></i><i class="fa fa-chevron-down"></i></h3>
    <div class="content">
      <div class="item"><p><a href="abrir.php"><i class="fa fa-file-o"></i>Abrir</a></p></div>
      <div class="item"><p><a href="pesquisar.php"><i class="fa fa-search"></i>Pesquisar</a></p></div>
    </div>
  </div>

  <div class="item"><p><a href="agenda.php"><i class="fa fa-calendar"></i>Agenda</a></p></div>

  <div class="item father">
    <h3><i class="fa fa-stethoscope"></i>Financeiro <i class="fa fa-chevron-right active"></i><i class="fa fa-chevron-down"></i></h3>
    <div class="content">
      <div class="item"><p><a href="contas-a-pagar.php"><i class="fa fa-minus"></i>Conta à pagar</a></p></div>
      <div class="item"><p><a href="contas-a-receber.php"><i class="fa fa-plus"></i>Contas à receber</a></p></div>
      <div class="item"><p><a href="fluxo-de-caixa.php"><i class="fa fa-balance-scale"></i>Fluxo de Caixa</a></p></div>
      <div class="item"><p><a href="contas-bancarias.php"><i class="fa fa-bank"></i>Contas Bancárias</a></p></div>
      <div class="item"><p><a href="equipes.php"><i class="fa fa-users"></i>Equipes</a></p></div>
    </div>
  </div>
  <div class="item father">
    <h3><i class="fa fa-book"></i>Administração <i class="fa fa-chevron-right active"></i><i class="fa fa-chevron-down"></i></h3>
    <div class="content">
      <div class="item"><p><a href="usuarios.php"><i class="fa fa-user"></i>Usuários</a></p></div>
    </div>
  </div>
</div>

@yield('content')
</body>
</html>
