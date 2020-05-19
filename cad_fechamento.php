<?php

session_start();
include_once("conecta.php");
include_once("security.php");
include("defaulttech.php");

unset (
  $_SESSION['fechaano'], 
  $_SESSION['fechames']
);

$fechames = empty($_POST['fechames'])?$_SESSION['fechames']:$_POST['fechames'];
$_SESSION['fechames'] = $fechames;

$fechaano = empty($_POST['fechaano'])?$_SESSION['fechaano']:$_POST['fechaano'];
$_SESSION['fechaano'] = $fechaano;

?>




<!doctype html>
<html lang="pt-br">
<head>
 <title>Dashboard - Área Técnica</title> 

 <!-- Custom styles for this template -->
 <link href="css/starter-template.css" rel="stylesheet">

</head>
<body>

  <main role="main" class="container">

    <div class="starter-template">
      <h3>Cadastro Tempo de Fechamento</h3>
      <h6> Mês <?php echo $fechames; ?> Ano <?php echo $fechaano; ?> </h6>
    </div>

    <form class="p-1 mb-1 bg-light text-dark" method="POST" action="inclui_fechamento.php">

      <!-- INPUT para tabela FECHAMENTO -->

      <form class="p-2 mb-2 bg-light text-dark" method="POST" action="incluiruser.php">
        <div class="form-row">
          <div class="form-group col-md-2"></div>
          <div class="form-group col-md-1">
            <label for="fecha1">24 horas</label>
            <input type="text" class="form-control" name="fecha0"  required>
          </div>
          <div class="form-group col-md-1">
            <label for="fecha1">01 dia</label>
            <input type="text" class="form-control" name="fecha1"  required>
          </div>
          <div class="form-group col-md-1">
            <label for="fecha1">02 dias</label>
            <input type="text" class="form-control" name="fecha2"  required>
          </div>
          <div class="form-group col-md-1">
            <label for="fecha1">03 dias</label>
            <input type="text" class="form-control" name="fecha3"  required>
          </div>
          <div class="form-group col-md-1">
            <label for="fecha1">04 dias</label>
            <input type="text" class="form-control" name="fecha4"  required>
          </div>
          <div class="form-group col-md-1">
            <label for="fecha1">05 dias</label>
            <input type="text" class="form-control" name="fecha5"  required>
          </div>
          <div class="form-group col-md-1">
            <label for="fecha1">+05 dias</label>
            <input type="text" class="form-control" name="fecha69"  required>
          </div>
          <div class="form-group col-md-1">
            <label for="fecha1">+10 dias</label>
            <input type="text" class="form-control" name="fecha10"  required>
          </div>
        </div>

        <button type="submit" class="btn btn-outline-primary">Cadastrar</button>

      </form>

    </main>

  </body>
  </html>