<?php

session_start();
include_once("conecta.php");
include_once("security.php");
include("defaultusers.php");

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
 <title>Dashboard - Administração</title> 

 <!-- Custom styles for this template -->
 <link href="css/starter-template.css" rel="stylesheet">

</head>
<body>

  <main role="main" class="container">

    <div class="starter-template">
      <h3>Consultar Rats</h3>
      <h6> Administração </h6>
      <!--<p class="lead">Use this document as a way to quickly start any new project.<br> All you get is this text and a mostly barebones HTML document.</p>-->

    </div>


    <!-- INICIO DO FORMULARIO DE CONSULTA -->

    <form class="p-1 mb-1 bg-light text-dark" method="POST" action="lista_rat_geral_adm.php">


      <!--Exibe dados da tabela clientes -->
      <div class="form-row"> 
        <div class="form-group col-md-2">
          <label for="RazaoSocial">Cliente</label>
          <input type="text" class="form-control" name="RazaoSocial" placeholder="RazaoSocial"> 
        </div>

        <div class="form-group col-md-2">
          <label for="ratnumero">Número da RAT</label>
          <input type="text" class="form-control" name="ratnumero" placeholder="RAT #">   
        </div>

        <div class="form-group col-md-2">
          <label for="rattipo">Tipo de Atendimento</label>
          <!--<input type="text" class="form-control form-control-sm" name="estagio" placeholder="Estágio da Proposta">-->
          <select nome="rattipo" class="form-control" name="rattipo">
            <option> Selecione... </option>
            <option value="1"<?php
            if ($consulta['rattipo'] == 1) {
              echo 'selected';
            }
            ?> >1-Contratual</option>

            <option value="2"<?php
            if ($consulta['rattipo'] == 2) {
              echo 'selected';
            }
            ?> >2-Adicional</option>

            <option value="3"<?php
            if ($consulta['rattipo'] == 3) {
              echo 'selected';
            }
            ?> >3-Garantia</option>
          </select>
        </div>


        <div class="form-group col-md-3">
          <label for="datainicial">Data Inicial</label>
          <input type="date" class="form-control" name="datacriacao"  placeholder="Data" autofocus>
        </div>
        <div class="form-group col-md-3">
          <label for="datafinal">Data Final</label>
          <input type="date" class="form-control" name="datacriacaofinal"  placeholder="Data" autofocus>
        </div>       
      </div>
      <div class="form-group row">
        <div class="col-sm-1">Gráfico?</div>
        <div class="col-sm-11">
          <div class="form-check">
            <input class="form-check-input" type="checkbox" name="grafico">
            <small id="emailHelp" class="form-text text-muted">(NOTA: Gráficos sem seleção de clientes podem apresentar dados distorcidos.)</small>
            <label class="form-check-label" for="gridCheck1"></label>
          </div>
        </div>
      </div>


      <button type="submit" class="btn btn-outline-primary">Consultar</button>


    </form>

  </main>

</body>
</html>