<?php
session_start();
$mysqli = include_once("conecta.php");
include_once("security.php");
include ("defaultusers.php");

    $tiposervicocontrato = empty($_POST['tiposervicocontrato'])?$_SESSION['tiposervicocontrato']:$_POST['tiposervicocontrato'];
    $_SESSION['tiposervicocontrato'] = $tiposervicocontrato;


   
$resultado1 = $mysqli->query("SELECT contratos.*, clientes.RazaoSocial FROM contratos INNER JOIN clientes ON contratos.cliente_uid = clientes.uid_cliente WHERE status=1 and tiposervicocontrato=1 ORDER BY RazaoSocial");
$linhas1 = mysqli_num_rows($resultado1);

while($linhas1 = mysqli_fetch_array($resultado1)){
  $valortotal1 = (($valortotal1) + ($linhas1['valoratual']));
}

 
$resultado2 = $mysqli->query("SELECT contratos.*, clientes.RazaoSocial FROM contratos INNER JOIN clientes ON contratos.cliente_uid = clientes.uid_cliente WHERE status=1 and tiposervicocontrato=2 ORDER BY RazaoSocial");
$linhas2 = mysqli_num_rows($resultado2);

while($linhas2 = mysqli_fetch_array($resultado2)){
  $valortotal2 = (($valortotal2) + ($linhas2['valoratual']));
}

 
$resultado3 = $mysqli->query("SELECT contratos.*, clientes.RazaoSocial FROM contratos INNER JOIN clientes ON contratos.cliente_uid = clientes.uid_cliente WHERE status=1 and tiposervicocontrato=3 ORDER BY RazaoSocial");
$linhas3 = mysqli_num_rows($resultado3);

while($linhas3 = mysqli_fetch_array($resultado3)){
  $valortotal3 = (($valortotal3) + ($linhas3['valoratual']));
}

 
$resultado4 = $mysqli->query("SELECT contratos.*, clientes.RazaoSocial FROM contratos INNER JOIN clientes ON contratos.cliente_uid = clientes.uid_cliente WHERE status=1 and tiposervicocontrato=4 ORDER BY RazaoSocial");
$linhas4 = mysqli_num_rows($resultado4);

while($linhas4 = mysqli_fetch_array($resultado4)){
  $valortotal4 = (($valortotal4) + ($linhas4['valoratual']));
}


?>

<!doctype html>
<html lang="pt-br">
<head>
 <title>Dashboard - Admin Área</title> 



 <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          ['Gestão e Suporte',     <?php echo $valortotal1; ?>],
          ['CloudBackup',      <?php echo $valortotal2; ?>],
          ['CloudServer',  <?php echo$valortotal3; ?>],
          ['Hosting', <?php echo $valortotal4; ?>]

        ]);

        var options = {
          title: '',
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

	<main role="main" class="container">

    <div class="starter-template">
      <h3>Contratos por tipo de serviço</h3>
     <div id="donutchart" style="width: 1023px; height: 569px;"></div>
    </div>

    <!-- INICIO DA LISTA DE USUARIOS -->

 
    <div class="col-md-12">



    <table class="table table-sm">
      <thead class="thead-dark ">
        <tr>

          <td class="table-success text-right"><b> Gestão e Suporte: R$ <?php echo number_format($valortotal1, 2, ',', '.'); ?></b></td>
          <td class="table-success text-right"><b> CloudBackup: R$ <?php echo number_format($valortotal2, 2, ',', '.'); ?></b></td>
          <td class="table-success text-right"><b> CloudServer: R$ <?php echo number_format($valortotal3, 2, ',', '.'); ?></b></td>
          <td class="table-success text-right"><b> Hosting: R$ <?php echo number_format($valortotal4, 2, ',', '.'); ?></b></td>

       </tr>

     </thead>

   </table>
 </div>
</main>
</body>
</html>





</main>

</body>
</html>