
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Project Pandora</title>

    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/ie10-viewport-bug-workaround.css" rel="stylesheet">
    <link href="/css/navbar-fixed-top.css" rel="stylesheet">
    <script src="/js/ie-emulation-modes-warning.js"></script>
  </head>

  <body>

    <!-- Fixed navbar -->
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand">Project Pandora</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Cadastros <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="/ncm/index">NCM</a></li>
                <li><a href="/produtos/index">Produtos</a></li>
                <li><a href="/parceiros/index">Parceiros</a></li>
                <li role="separator" class="divider"></li>                
                <li><a href="/nfentradas/index">Nota Fiscal de Entrada</a></li>
                <li><a href="#">Nota Fiscal de Saída</a></li>
              </ul>
            </li>
          </ul>
          <ul class="nav navbar-nav">
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Operações <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="#">Pendências de Baixa</a></li>
              </ul>
            </li>
          </ul>  
          <ul class="nav navbar-nav">
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Relatórios <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="#">Consumo</a></li>
                <li><a href="#">Saldo</a></li>                
              </ul>
            </li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="/auth/register">Cria Usuário</a></li>
            <li><a href="/auth/logout">Sair</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <div class="container">

      <!-- Main component for a primary marketing message or call to action -->
      <div class="jumbotron">
        
          @yield('conteudo')

      </div>

    </div> <!-- /container -->


    <script src="/js/jquery.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/ie10-viewport-bug-workaround.js"></script>
    <script src="/js/functions.js"></script>
  </body>
</html>
