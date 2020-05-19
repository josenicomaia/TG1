<?php
session_start();
    include_once("conecta.php");
    include_once("security.php");
    include ("defaultcom.php");

   
    $datacriacao = $_POST['datacriacao'];
    $datacriacaofinal = $_POST['datacriacaofinal'];




    $sqlaberto=mysql_query("SELECT propostas.*, clientes.RazaoSocial FROM propostas INNER JOIN clientes ON propostas.cliente_uid = clientes.uid_cliente where propostas.estagio <=  3 and date(`datacriacao`) between date('$datacriacao') and date('$datacriacaofinal')");
    $totalaberto=mysql_num_rows($sqlaberto);


  $sqlfechada=mysql_query("SELECT propostas.*, clientes.RazaoSocial FROM propostas INNER JOIN clientes ON propostas.cliente_uid = clientes.uid_cliente where propostas.estagio =  4 and date(`datacriacao`) between date('$datacriacao') and date('$datacriacaofinal')");
    $totalfechado=mysql_num_rows($sqlfechada);


    $sqlperdida=mysql_query("SELECT propostas.*, clientes.RazaoSocial FROM propostas INNER JOIN clientes ON propostas.cliente_uid = clientes.uid_cliente where propostas.estagio >  4 and date(`datacriacao`) between date('$datacriacao') and date('$datacriacaofinal')");
    $totalperdida=mysql_num_rows($sqlperdida);

    $totalgeral= $totalaberto + $totalperdida + $totalfechado;

  
  ?>


<!doctype html>
<html lang="pt-br">
    <head>
        
    <!-- Custom styles for this template -->
    <link href="css/signin.css" rel="stylesheet">

 <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Propostas', 'Total'],
          ['Em Aberto',   <?php echo $totalaberto; ?>],
          ['Fechadas',    <?php echo $totalfechado; ?>],
          ['Perdidas',    <?php echo $totalperdida; ?>]
         
        ]);

        var options = {
          //title: 'Propostas',
          backgroundColor: "#F5F5F5",
          colors:['blue','green', 'red'],
          is3D: true,
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
        chart.draw(data, options);
      }
    </script>



    </head>
    <body>
	     <div class="starter-template">
          <br />
          <br />
          <h3>Total de propostas por período</h3>
          
          
           <div id="piechart_3d" style="width: 810px; height: 450px;"></div>
          <h6>De <?php echo $datacriacao; ?> até <?php echo $datacriacaofinal; ?>  </h6>
           <h6> Total de <?php echo $totalgeral; ?> propostas </h6>
        </div> 
    </body>
</html>