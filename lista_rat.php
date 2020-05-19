<?php
session_start();
    include_once("conecta.php");
    include_once("security.php");
    include ("defaulttech.php");


    $datacriacao = $_POST['datacriacao'];
    $datacriacaofinal = $_POST['datacriacaofinal'];


    $resultado=mysql_query("SELECT * FROM contratos
    INNER JOIN clientes ON clientes.uid_cliente = contratos.cliente_uid
    INNER JOIN rat ON rat.ratcodotrs = contratos.codotrs where date(`ratdata`) between date('$datacriacao') and date('$datacriacaofinal') ORDER BY 'ratnumero'");

    //$resultado=mysql_query("SELECT * FROM rat where date(`ratdata`) between date('$datacriacao') and date('$datacriacaofinal') ORDER BY 'ratnumero'");
    $linhas=mysql_num_rows($resultado);
?>

<!doctype html>
<html lang="pt-br">
    <head>
       <title>Dashboard - Admin Área</title> 

    

    </head>
    <body>
    
	<main role="main" class="container">

      <div class="starter-template">
        <h2>Lista de RATs Cadastradas</h2>
        
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
                <th>Razao Social</th>
         
              </tr>
            </thead>
            <tbody>
        <?php 
          while($linhas = mysql_fetch_array($resultado)){
            $totalhoras = strtotime($linhas['ratfim']) - strtotime($linha['ratinicio']);


            echo "<tr>";
              echo "<td>".$linhas['ratnumero']."</td>";
              echo "<td>".$linhas['ratdata']."</td>";
              echo "<td>".$linhas['ratinicio']."</td>";
              echo "<td>".$linhas['ratfim']."</td>";
              echo "<td>".$linhas['rattipo']."</td>";
              echo "<td>".$linhas['ratcodotrs']."</td>";
              echo "<td>".$linhas['RazaoSocial']."</td>";

              
            echo "</tr>";

          }

          echo (ceil($totalhoras/(3600*24)));
         
        ?>
            </tbody>
          </table>
        </div>
   


   

    </main>

    </body>
</html>