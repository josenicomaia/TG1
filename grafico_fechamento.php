<?php
session_start();
include_once("conecta.php");
include_once("security.php");
include ("defaulttech.php");

$fechames = empty($_POST['fechames'])?$_SESSION['fechames']:$_POST['fechames'];
$_SESSION['fechames'] = $fechames;

$fechaano = empty($_POST['fechaano'])?$_SESSION['fechaano']:$_POST['fechaano'];
$_SESSION['fechaano'] = $fechaano;




$sql = mysql_query("SELECT * FROM fechamento WHERE fechaano = '$fechaano' and fechames = '$fechames' ");
$consulta = mysql_fetch_assoc($sql);  

?>


<!doctype html>
<html lang="pt-br">
<head>

  <!-- Custom styles for this template -->
  <link href="css/signin.css" rel="stylesheet">

  <html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          ['0 dia',     <?php echo $consulta['fecha0']; ?>],
          ['01 dia',      <?php echo $consulta['fecha1']; ?>],
          ['02 dias',  <?php echo $consulta['fecha2']; ?>],
          ['03 dias', <?php echo $consulta['fecha3']; ?>],
          ['04 dias',    <?php echo $consulta['fecha4']; ?>],
          ['05 dias',    <?php echo $consulta['fecha5']; ?>],
          ['6-9 dias',    <?php echo $consulta['fecha69']; ?>],
          ['10+ dias',    <?php echo $consulta['fecha10']; ?>]
        ]);

        var options = {
          title: 'Tempo em que chamado permanece aberto',
          pieHole: 0.4,
          

          backgroundColor: {fill: '#F5F5F5'},
          legend: {position: 'left', alignment: 'center'},
        };

        var chart = new google.visualization.PieChart(document.getElementById('donutchart'));
        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
    <div class="starter-template">
      <h3>Chamados - Tempo total </h3>
      <h6> Mês <?php echo $fechames; ?> Ano <?php echo $fechaano; ?> </h6>
      <br />

      <div id="donutchart" style="width: 810px; height: 450px;"></div>
    </div>
  </body>
  </html>
