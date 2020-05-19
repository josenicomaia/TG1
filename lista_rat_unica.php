<?php
session_start();
$mysqli = include_once("conecta.php");
include_once("security.php");
include ("defaulttech.php");
//include ("erros.php");



$ratnumero = empty($_POST['ratnumero'])?$_SESSION['ratnumero']:$_POST['ratnumero'];
$_SESSION['ratnumero'] = $ratnumero;





$resultado = $mysqli->query("SELECT * FROM contratos
  INNER JOIN clientes ON clientes.uid_cliente = contratos.cliente_uid
  INNER JOIN rat ON rat.ratcodotrs = contratos.codotrs where ratnumero ='$ratnumero' LIMIT 1");

//$linhas=mysql_num_rows($resultado);
$linhas = mysqli_fetch_assoc($resultado);

    if(($linhas['ratnumero']) == ""){

      ?>
      <div class="alert alert-danger" role="alert"> RAT não encontrada.</div> 
      <?php
      header ("Refresh:3,consulta_rat_unica.php");

    }else{


?>

<!doctype html>
<html lang="pt-br">
<head>
  <title>Dashboard - Admin Área</title> 
</head>
<body>
  <main role="main" class="container">
    <div class="starter-template">
      <h3>Consulta de RAT </h3>
    </div>
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

          //while($linhas = mysql_fetch_assoc($resultado)){
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
          //}
          
          ?>
        </tbody>
      </table>
       <a class="btn btn-outline-warning " href="hometech.php" role="button">Fechar</a>
      <a class="btn btn-outline-primary " href="consulta_rat_unica.php" role="button">Nova Consuta</a>
      <a class="btn btn-outline-danger " href="deleta_rat_unica.php" role="button">Excluir</a>
     
    </main>
    <?php
  }
    ?>

  </body>
  </html>