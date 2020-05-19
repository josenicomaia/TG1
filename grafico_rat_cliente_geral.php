<?php
session_start();
    include_once("conecta.php");
    //include_once("security.php");
    include ("defaultusers.php");

   
    $datacriacao = $_POST['datacriacao'];
    $datacriacaofinal = $_POST['datacriacaofinal'];




   // $sqlaberto=mysql_query("SELECT propostas.*, clientes.RazaoSocial FROM propostas INNER JOIN clientes ON propostas.cliente_uid = clientes.uid_cliente where propostas.estagio =  1 and date(`datacriacao`) between date('$datacriacao') and date('$datacriacaofinal')");
   // $total1=mysql_num_rows($sqlaberto);


 // $sqlfechada=mysql_query("SELECT propostas.*, clientes.RazaoSocial FROM propostas INNER JOIN clientes ON propostas.cliente_uid = clientes.uid_cliente where propostas.estagio =  2 and date(`datacriacao`) between date('$datacriacao') and date('$datacriacaofinal')");
 //   $total2=mysql_num_rows($sqlfechada);


 //   $sqlperdida=mysql_query("SELECT propostas.*, clientes.RazaoSocial FROM propostas INNER JOIN clientes ON propostas.cliente_uid = clientes.uid_cliente where propostas.estagio =  3 and date(`datacriacao`) between date('$datacriacao') and date('$datacriacaofinal')");
 //   $total3=mysql_num_rows($sqlperdida);

 //   $totalgeral= $total1 + $total2 + $total3;



       $resultado=mysql_query("SELECT * FROM contratos
    INNER JOIN clientes ON clientes.uid_cliente = contratos.cliente_uid
    INNER JOIN rat ON rat.ratcodotrs = contratos.codotrs");

       $total=mysql_num_rows($resultado);

      echo $total;

    //$resultado=mysql_query("SELECT * FROM rat where ratcodotrs='$ratcodotrs' or ratnumero ='$ratnumero' or rattipo = '$rattipo' and date(`ratdata`) between date('$datacriacao') and date('$datacriacaofinal') ORDER BY ratnumero");
    //$linhas=mysql_num_rows($resultado);

  
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
          ['Enviadas',   <?php echo $total; ?>]
         
         
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
          <h2>Total de proposta por período - Abertas</h2>
          
          
           <div id="piechart_3d" style="width: 810px; height: 450px;"></div>
          <h6>De <?php echo $datacriacao; ?> até <?php echo $datacriacaofinal; ?>  </h6>
           <h6> Total de <?php echo $totalgeral; ?> propostas </h6>
        </div> 
    </body>
</html>