<?php
session_start();
include_once("conecta.php");
include_once("security.php");
include ("defaultusers.php");
//include ("erros.php");




$datacriacao = $_POST['datacriacao'];
$datacriacaofinal = $_POST['datacriacaofinal'];

$ratcodotrs = empty($_POST['ratcodotrs'])?$_SESSION['ratcodotrs']:$_POST['ratcodotrs'];
$_SESSION['ratcodotrs'] = $ratcodotrs;

$ratnumero = empty($_POST['ratnumero'])?$_SESSION['ratnumero']:$_POST['ratnumero'];
$_SESSION['ratnumero'] = $ratnumero;

$rattipo = empty($_POST['rattipo'])?$_SESSION['rattipo']:$_POST['rattipo'];
$_SESSION['rattipo'] = $rattipo;

$grafico = empty($_POST['grafico'])?$_SESSION['grafico']:$_POST['grafico'];
$_SESSION['grafioc'] = $grafico;

$RazaoSocial = empty($_POST['RazaoSocial'])?$_SESSION['RazaoSocial']:$_POST['RazaoSocial'];
$_SESSION['RazaoSocial'] = $RazaoSocial;


// INICIO MARCOS

$numparam = 0;


if ($RazaoSocial != "") {
  if ( $numparam == 0) {
    $sqlwhere = $sqlwhere."RazaoSocial LIKE '%$RazaoSocial%'";
    $numparam++;
  }
  else
    $sqlwhere = $sqlwhere." and RazaoSocial LIKE '%$RazaoSocial%'";
}


if ($ratnumero != "") {
 if ($numparam == 0) {
  $sqlwhere = $sqlwhere."ratnumero = '$ratnumero'";
  $numparam++;  
}
else
  $sqlwhere = $sqlwhere." and ratnumero = '$ratnumero'";
}


if ($rattipo != "Selecione...") {
  if ($numparam == 0) {
    $sqlwhere = $sqlwhere."rattipo = '$rattipo'";
    $numparam++;
  }
  else
    $sqlwhere = $sqlwhere." and rattipo = '$rattipo'";
}


if ($datacriacao != "" &&  $datacriacaofinal != "") {
  if ($numparam == 0) {
    $sqlwhere = $sqlwhere."date(`ratdata`) between date('$datacriacao') and date('$datacriacaofinal')";
    $numparam++;
  }
  else
    $sqlwhere = $sqlwhere." and date(`ratdata`) between date('$datacriacao') and date('$datacriacaofinal')";
}


$resultado=mysql_query("SELECT * FROM contratos
  INNER JOIN clientes ON clientes.uid_cliente = contratos.cliente_uid
  INNER JOIN rat ON rat.ratcodotrs = contratos.codotrs where $sqlwhere and contratos.tiposervicocontrato = 1 ORDER BY ratdata");



$linhas=mysql_num_rows($resultado);


//$consulta = mysql_fetch_assoc($resultado);
//$horascontratadas = $consulta['totalhoras'];
//echo $horascontratadas;
//echo "TTTTT";

// FIM MARCOS  


/* ORIGINAL

if (($ratcodotrs == "") && ($ratnumero == "") && ($rattipo == "Selecione...")) {



  $resultado=mysql_query("SELECT * FROM contratos
    INNER JOIN clientes ON clientes.uid_cliente = contratos.cliente_uid
    INNER JOIN rat ON rat.ratcodotrs = contratos.codotrs where date(`ratdata`) between date('$datacriacao') and date('$datacriacaofinal') ORDER BY 'ratnumero'");

    //$resultado=mysql_query("SELECT * FROM rat where date(`ratdata`) between date('$datacriacao') and date('$datacriacaofinal') ORDER BY 'ratnumero'");
  $linhas=mysql_num_rows($resultado);
  
}else{


  $resultado=mysql_query("SELECT * FROM contratos
    INNER JOIN clientes ON clientes.uid_cliente = contratos.cliente_uid
    INNER JOIN rat ON rat.ratcodotrs = contratos.codotrs where (ratcodotrs='$ratcodotrs' or ratnumero ='$ratnumero' ) or rattipo = '$rattipo') and date(`ratdata`) between date('$datacriacao') and date('$datacriacaofinal') ORDER BY 'ratnumero'");

    //$resultado=mysql_query("SELECT * FROM rat where ratcodotrs='$ratcodotrs' or ratnumero ='$ratnumero' or rattipo = '$rattipo' and date(`ratdata`) between date('$datacriacao') and date('$datacriacaofinal') ORDER BY ratnumero");

 

  $linhas=mysql_num_rows($resultado);


}
 */

?>

<!doctype html>
<html lang="pt-br">
<head>
  <title>Dashboard - Admin Área</title> 




</head>
<body>

  <main role="main" class="container">

    <div class="starter-template">
      <h3>Consulta de RATs </h3>
      <h6> Administração </h6>

    </div>

    

    <!-- INICIO DA LISTA DE USUARIOS -->


    <div class="col-md-12">


      <table class="table table-hover table-sm">
        <thead class="thead-dark">
          <tr>
            <th>RAT #</th>
            <th>Data</th>
            <th>Hora Inicial</th>
            <th>Horal Final</th>
            <th>Tipo Atend.</th>
            <th>OTRS</th>
            <th>Razão Social</th>
            <th>Duração</th>


          </tr>
        </thead>
        <tbody>
          <?php 

                // Função SOMAR

          function SomaHoras ($horaA, $horaB) {
            $horaAe=explode(":",$horaA);
            $horaBe=explode(":",$horaB);

            $hours=$horaAe[0]+$horaBe[0];
            $minutes=$horaAe[1]+$horaBe[1];

            if($hours < 10){
              $hours = "0".$hours;
            }

            if($hours == 0){
              $hours = "00";
            }


            if($minutes > 59){
              $minutes=$minutes-60;
              $hours++;
            }

            if($minutes < 10){
              $minutes = "0".$minutes;
            }

            if($minutes == 0){
              $minutes = "00";
            }

            $sum=$hours.":".$minutes;
            return $sum;
          }



                // FIM FUNCAO



          while($linhas = mysql_fetch_assoc($resultado)){

            echo "<tr>";
            echo "<td>".$linhas['ratnumero']."</td>";
            echo "<td>".$linhas['ratdata']."</td>";
            echo "<td>".$linhas['ratinicio']."</td>";
            echo "<td>".$linhas['ratfim']."</td>";
            echo "<td>".$linhas['rattipo']."</td>";
            echo "<td>".$linhas['ratcodotrs']."</td>";
            echo "<td>".$linhas['RazaoSocial']."</td>";
            echo "<td>".$duracao= gmdate('H:i', strtotime( $linhas['ratfim']) - strtotime( $linhas['ratinicio']))."</td>";


            echo "</tr>";
            

            $consumototal = SomaHoras ($duracao, $consumototal);
            $totalcontrato = $linhas['totalhoras'];

            

          }

          
          ?>
        </tbody>
      </table>
      <table class="table table-sm">
        <thead class="thead-dark ">
          <tr>

            <td class="table-warning text-right"><b> Total de Horas: <?php echo $consumototal; ?></b></td>
            <small id="Informacaoe" class="form-text text-muted">Tipo de Atendimento: 1- Contratual | 2- Adicional | 3- Garantia</small>


          </tr>

        </thead>
        

      </table>

      <?php

      $horagrafico=explode(":",$consumototal);
      
      $somentehora=$horagrafico[0];
      $somenteminuto=$horagrafico[1];

      if($somenteminuto > 35){
        $somentehora=$somentehora+1;}
        ?>

        

        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
        <script type="text/javascript">
          google.charts.load('current', {'packages':['bar']});
          google.charts.setOnLoadCallback(drawChart);

          function drawChart() {
            var data = google.visualization.arrayToDataTable([
              ['Consumo de Horas "In-loco"', 'Contratada', 'Consumida'],

              ['Horas', <?php echo $totalcontrato; ?>, <?php echo $somentehora; ?>]
              ]);

            var options = {
              chart: {
                title: 'Consumo de Horas',
                subtitle: 'Demonstrativo de Horas Contratadas x Consumidas',
              }
            };

            var chart = new google.charts.Bar(document.getElementById('columnchart_material'));

            chart.draw(data, google.charts.Bar.convertOptions(options));
          }
        </script>


        <?php
        if ($grafico == "on") {
          ?>
          <br />
          <div id="columnchart_material" style="width: 800px; height: 500px;"></div>
        </div>

        <?php
      }
      ?>
    </main>



  </body>
  </html>