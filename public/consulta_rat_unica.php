<?php

session_start();
include_once("conecta.php");
include_once("security.php");
include("defaulttech.php");

unset (
  $_SESSION['ratcodotrs'], 
  $_SESSION['ratnumero'],
  $_SESSION['ratdata'],
  $_SESSION['ratinicio'],
  $_SESSION['ratfim'], 
  $_SESSION['rattipo']
);

?>

<!doctype html>
<html lang="pt-br">
<head>
 <title>Dashboard - Área Técnica</title> 

 <!-- Custom styles for this template -->
 <link href="css/signin.css" rel="stylesheet">
</head>
<body>
  <main role="main" class="container">
    <div class="starter-template">
      <div class="container text-center">
        <form class="form-signin" method="POST" action="lista_rat_unica.php">
          <h3 class="h3 mb-3 font-weight-normal">Qual Rat deseja Consultar?</h3>
          <label for="inputEmail" class="sr-only">Rat Número</label>
          <input type="text" name="ratnumero" class="form-control" placeholder="Rat #" required autofocus>
          <br />
          <button class="btn btn-lg btn-outline-primary btn-block" type="submit">Pesquisar</button>
        </form>
      </div>
    </div>
    </main>
  </body>
  </html>