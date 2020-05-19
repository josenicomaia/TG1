<?php
session_start();
    $mysqli = include_once("conecta.php");
    include_once("security.php");
    include ("defaulttech.php");
    $ajan = $_POST['ajan'];
    $fjan = $_POST['fjan'];
    $afev = $_POST['afev'];
    $ffev = $_POST['ffev'];
    $amar = $_POST['amar'];
    $fmar = $_POST['fmar'];
    $aabr = $_POST['aabr'];
    $fabr = $_POST['fabr'];
    $amai = $_POST['amai'];
    $fmai = $_POST['fmai'];
    $ajun = $_POST['ajun'];
    $fjun = $_POST['fjun'];
    $ajul = $_POST['ajul'];
    $fjul = $_POST['fjul'];
    $aago = $_POST['aago'];
    $fago = $_POST['fago'];
    $aset = $_POST['aset'];
    $fset = $_POST['fset'];
    $aout = $_POST['aout'];
    $fout = $_POST['fout'];
    $anov = $_POST['anov'];
    $fnov = $_POST['fnov'];
    $adez = $_POST['adez'];
    $fdez = $_POST['fdez'];
    $ano = $_POST['ano'];
   


    
    $sql = $mysqli->query("SELECT * FROM chamadospormes WHERE ano = '$ano' ");
    $consulta = mysqli_fetch_assoc($sql);

  ?>


<!doctype html>
<html lang="pt-br">
    <head>
        
    <!-- Custom styles for this template -->
    <link href="css/signin.css" rel="stylesheet">

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Mês', 'Abertos', 'Fechados'],
          ['Jan', <?php echo $consulta['ajan']; ?>,      <?php echo $consulta['fjan']; ?>,],
          ['Fev',  <?php echo $consulta['afev']; ?>,      <?php echo $consulta['ffev']; ?>],
          ['Mar ',  <?php echo $consulta['amar']; ?>,       <?php echo $consulta['fmar']; ?>],
          ['Abr ',  <?php echo $consulta['aabr']; ?>,       <?php echo $consulta['fabr']; ?>],
          ['Mai ',  <?php echo $consulta['amai']; ?>,      <?php echo $consulta['fmai']; ?>],
          ['Jun ',  <?php echo $consulta['ajun']; ?>,      <?php echo $consulta['fjun']; ?>],
          ['Jul ',  <?php echo $consulta['ajul']; ?>,       <?php echo $consulta['fjul']; ?>],
          ['Ago',  <?php echo $consulta['aago']; ?>,      <?php echo $consulta['fago']; ?>],
          ['Set',  <?php echo $consulta['aset']; ?>,      <?php echo $consulta['fset']; ?>],
          ['Out',  <?php echo $consulta['aout']; ?>,      <?php echo $consulta['fout']; ?>],
          ['Nov',  <?php echo $consulta['anov']; ?>,       <?php echo $consulta['fnov']; ?>],
          ['Dez',  <?php echo $consulta['adez']; ?>,      <?php echo $consulta['fdez']; ?>]
        ]);

        var options = {
          chart: {
            title: '',
            subtitle: '',
          },
          backgroundColor: {fill: '#F5F5F5'},
          legend: {position: 'bottom', alignment: 'center'},
          bars: 'vertical' // Required for Material Bar Charts.
        };

        var chart = new google.charts.Bar(document.getElementById('barchart_material'));

        chart.draw(data, google.charts.Bar.convertOptions(options));
      }
    </script>



    </head>
    <body>
	     <div class="starter-template">
          <h3>Total de chamados por mês</h3>
          <h6> Ano : <?php echo $ano; ?> </h6>
           <div id="barchart_material" style="width: 990px; height: 450px;"></div>
        </div> 
    </body>
</html>
