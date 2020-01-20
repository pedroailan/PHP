<!DOCTYPE html>


<?php
  
  session_start();

  if(!isset($_SESSION['autenticado']) || $_SESSION['autenticado'] != 'SIM'){
    header('Location: index.php?login=erro2');
  }
?>
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
      <h2 id="title" align="center">Edição de Estoque</h2>
    </div>
    <div>
    <ul id="home">
      <li id="item1">
        <a href="cadastrar.php">Cadastrar</a>
      </li>
      <li>
        <a href="listar.php">Listar Equipamentos</a>
      </li>
      <li id="atual">
        <a href="editar.php">Editar Estoque</a>
      </li>
      <li>
        <a href="relatorio.php">Gerar Relatório</a>
      </li>
    </ul>
  </div>
  </div>


  <script src="script.js"></script>
</body>

</html>