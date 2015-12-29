
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Project Pandora - Portal de Acesso</title>

    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/ie10-viewport-bug-workaround.css" rel="stylesheet">
    <link href="/css/cover.css" rel="stylesheet">
    <script src="/js/ie-emulation-modes-warning.js"></script>
  </head>

  <body>

    <div class="site-wrapper">

      <div class="site-wrapper-inner">

        <div class="cover-container">

          <div class="masthead clearfix">
            <div class="inner">
                <p> </p>              
            </div>
          </div>

          <div class="inner cover">
              <form class="form-signin" method="POST" action="/auth/login">
                {!! csrf_field() !!}
                <h2 class="form-signin-heading" align="center">Project Pandora</h2><br>
                <label for="inputEmail" class="sr-only">E-mail</label>
                <input type="email" name="email" id="inputEmail" class="form-control" value="adm@adm.com" placeholder="Email address" required autofocus>
                <label for="inputPassword" class="sr-only">Senha</label>
                <input type="password" name="password" value="10101010" id="inputPassword" class="form-control" placeholder="Password" required>
                <div class="checkbox" align="center">
                  <label>
                    <input type="checkbox" name="remember" value="remember-me"> Lembrar meu login
                  </label>
                </div>
                <button class="btn btn-lg btn-block" type="submit">Entrar</button>
              </form>
          </div>

          <div class="mastfoot">
            <div class="inner">
              <p>Project Pandora - 2015</p>
            </div>
          </div>

        </div>

      </div>

    </div>

    <script src="/js/jquery.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>