<!doctype html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" href="../../../../favicon.ico">

  <title>DashBoard M&F</title>

  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">


  <!-- Custom styles for this template -->
  <link href="css/starter-template.css" rel="stylesheet">
</head>

<body>

  <nav class="navbar navbar-expand-md navbar-dark bg-secondary fixed-top">
    <a class="navbar-brand" href="homeadmin.php"><img src="img/logomf.png" width="57" height="30" alt=""></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="hometech.php">Voltar <span class="sr-only">(current)</span></a>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Ações</a>
          <div class="dropdown-menu" aria-labelledby="dropdown01">
            <a class="dropdown-item" href="consultaanochamado.php">Cadadastro - Chamados </a>
            <a class="dropdown-item" href="consulta_cliente_rat.php">Cadastro - RATs</a>
            <a class="dropdown-item" href="consulta_fechamento.php">Cadastro - Fechamento</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="consulta_rat.php">Consulta - RATs</a>
            <a class="dropdown-item" href="consulta_rat_unica.php">Consulta - RAT Única</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="consultas-ano.php">Gráfico - Chamados Mensal</a>
            <a class="dropdown-item" href="consulta_mes_ano_fechamento.php">Gráfico - Tempo Fechamento</a>

          </div>


        </li>


      </ul>
      <form class="form-inline my-2 my-lg-0">
        <font color="#FFFFFF">
          <?php
          @session_start();
          include_once("security.php");
          $ESPACO="&nbsp";
          echo ("Bem-Vindo: " .$_SESSION['NomeUsuario'] .$ESPACO .$ESPACO);

          if(($_SESSION['id_acesso'] == 2) || ($_SESSION['id_acesso'] == 4)){
            header("Location: login.php");
          }
          ?>
        </font>

        <a class="btn btn-outline-dark my-2 my-sm-0" href="encerrar.php" role="button">Sair</a>
        
      </form> 
    </div>
  </nav>

    <!--<main role="main" class="container">

    </main> /.container -->

    <!-- Bootstrap core JavaScript
      ================================================== -->
      <!-- Placed at the end of the document so the pages load faster -->
      <script src="js/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
      <script>window.jQuery || document.write('<script src="js/jquery-slim.min.js"><\/script>')</script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.min.js"></script>

    </body>

    </html>