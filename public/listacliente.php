<?php
session_start();
$mysqli = include_once("conecta.php");
include_once("security.php");
include ("defaultcom.php");


$resultado = $mysqli->query("SELECT * FROM clientes WHERE Ativo ='Sim' ORDER BY RazaoSocial");
$linhas = mysqli_num_rows($resultado);

?>

<!doctype html>
<html lang="pt-br">
<head>
 <title>Dashboard - Admin Área</title> 



</head>
<body>

	<main role="main" class="container">

    <div class="starter-template">
      <h3>Clientes Cadastrados</h3>

    </div>

    <!-- INICIO DA LISTA DE USUARIOS -->


    <div class="col-md-12">


      <table class="table table-hover table-sm">
        <thead class="thead-dark">
          <tr>
            <th>Cód.</th>
            <th>Razão Social</th>
            <th>CNPJ</th>
            <th>Telefone</th>
            
            

          </tr>
        </thead>
        <tbody>
          <?php 
          while($linhas = mysqli_fetch_array($resultado)){

        
          echo "<tr>";
          echo "<td>".$linhas['Codigo']."</td>";
          echo utf8_encode ("<td>".$linhas['RazaoSocial']."</td>");
          echo ("<td>".$linhas['CNPJ']."</td>");
          echo "<td>".$linhas['Telefone1']."</td>";
         // echo utf8_encode ("<td>".$linhas['Observacao']."</td>");
         
        }
        ?>
      </tbody>
    </table>
    
 </div>
</main>
</body>
</html>





</main>

</body>
</html>