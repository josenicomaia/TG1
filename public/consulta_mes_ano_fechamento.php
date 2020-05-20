<?php

session_start();
include_once("conecta.php");
include_once("security.php");
include("defaulttech.php");

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
      <h3>Gráfico Tempo de Fechamento</h3>
    </div>

    <form class="p-1 mb-1 bg-light text-dark" method="POST" action="grafico_fechamento.php">

      <!-- INPUT para tabela FECHAMENTO -->

      <div class="form-row">
        <div class="form-group col-md-3"></div>
        <div class="form-group col-md-3">
          <label for="ano" class="col-form-label-sm">Ano</label>
          <select nome="fechaano" class="form-control" name="fechaano">
            <option >Selecionar...</option>
            <option value="2018">2018</option>
            <option value="2019">2019</option>
            <option value="2020">2020</option>
            <option value="2021">2021</option>
            <option value="2022">2022</option>
            <option value="2023">2023</option>
            <option value="2024">2024</option>
            <option value="2025">2025</option>
          </select>
        </div>

        <div class="form-group col-md-3">
          <label for="fechames" class="col-form-label-sm"> Mês </label>
          <select nome="fechames" class="form-control" name="fechames">
            <option value="">Selecionar...</option>
            <option value="01">Janeiro</option>
            <option value="02">Fevereiro</option>
            <option value="03">Março</option>
            <option value="04">Abril</option>
            <option value="05">Maio</option>
            <option value="06">Junho</option>
            <option value="07">Julho</option>
            <option value="08">Agosto</option>
            <option value="09">Setembro</option>
            <option value="10">Outubro</option>
            <option value="11">Novembro</option>
            <option value="12">Dezembro</option>
          </select>
        </div>
      </div> 
      <button type="submit" class="btn btn-outline-primary btn-block">Visualizar</button>
    </form>


  </main>

</body>
</html>