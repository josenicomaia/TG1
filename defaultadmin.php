<?php
    @session_start();
?>
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

  <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
    <a class="navbar-brand" href="#"><img src="img/logomf.png" width="57" height="30" alt=""></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="homeadmin.php">Home<span class="sr-only">(current)</span></a>
        </li>
        
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Ações</a>
          <div class="dropdown-menu" aria-labelledby="dropdown01">
            <a class="dropdown-item" href="caduser.php">Cadastrar Usuário</a>
            <a class="dropdown-item" href="consultauser.php">Consultar Usuário</a>
            <a class="dropdown-item" href="editauser.php">Editar Usuário</a>
            <a class="dropdown-item" href="listauser.php">Listar Usuário</a>
          </div>


        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="http://example.com" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Módulos</a>
          <div class="dropdown-menu" aria-labelledby="dropdown01">
            <a class="dropdown-item" href="homeusers.php">Administração</a>
            <a class="dropdown-item" href="homecom.php">Comercial</a>  
            <a class="dropdown-item" href="hometech.php">Técnico</a>
            
          </div>


        </li>

      </ul>
      <form class="form-inline my-2 my-lg-0">
        <font color="#FFFFFF">
          <?php
          include_once("security.php");
          $ESPACO="&nbsp";
          echo ("Bem-Vindo: " .$_SESSION['NomeUsuario'] .$ESPACO .$ESPACO);
          
          if($_SESSION['id_acesso'] <> 1) {
            header ("Location: login.php");
          }
          ?>
        </font>

        <a class="btn btn-outline-warning my-2 my-sm-0" href="encerrar.php" role="button">Sair</a>
        
      </form> 
    </div>
  </nav>

  
    <!-- Bootstrap core JavaScript
      ================================================== -->
      <!-- Placed at the end of the document so the pages load faster -->
      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
      <script>window.jQuery || document.write('<script src="js/jquery-slim.min.js"><\/script>')</script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.min.js"></script>

    </body>


    </html>