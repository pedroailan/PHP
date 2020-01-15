<!DOCTYPE html>

<html>

<head>
  <link data-require="bootstrap@3.3.7" data-semver="3.3.7" rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
  <script data-require="jquery@*" data-semver="3.1.1" src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script data-require="bootstrap@3.3.7" data-semver="3.3.7" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script data-require="angular.js@1.6.2" data-semver="1.6.2" src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.2/angular.js"></script>
  <link rel="stylesheet" href="style.css" />
  <meta charset="UTF-8">
</head>

<body>
  <div class="container">
    <div class="content-wrap">
      <h3 id="title" align="center">FUNDAT</h3>
      <h2 id="title" align="center">Home</h2>
    </div>
    <form class="formulario" action="validar_login.php" method="post">
      <div class="caixa-entrada-dados">
        <span>Usuário</span>
        <input type="text" name="usuario" value="" class="input-dados">
        <span>Senha</span>
        <input type="text" name="senha" value="" class="input-dados">

        <!--
        <? if (isset($_GET['login']) && $_GET['login'] == 'erro') { ?>
          <div class="text-danger">
            Usuário ou senha inválid(o)s
        <? } ?>
      -->

      </div>

        <div class="botao-logar">
          <button id="btn" class="btn" type="submit">Logar</button>
        </div>
      </div>
    </form>


  <script src="script.js"></script>
</body>

</html>