<?php
session_start();
    $mysqli = include_once("conecta.php");
    //include_once("security.php");
    include ("defaultcom.php");

    $datacriacao = $_POST['datacriacao'];
    $datacriacaofinal = $_POST['datacriacaofinal'];

    $resultado = $mysqli->query("SELECT propostas.*, clientes.RazaoSocial FROM propostas INNER JOIN clientes ON propostas.cliente_uid = clientes.uid_cliente where propostas.estagio =  4 and date(`datacriacao`) between date('$datacriacao') and date('$datacriacaofinal')");
    $linhas = mysqli_num_rows($resultado);


?>

<!doctype html>
<html lang="pt-br">
    <head>
       <title>Dashboard - Área Comercial</title> 

    

    </head>
    <body>
    
	<main role="main" class="container">

      <div class="starter-template">
        <h3>Propostas Fechadas</h3>
        <h6> Período: De <?php echo $datacriacao; ?> até <?php echo $datacriacaofinal; ?>  </h6>
        
      </div>
      
      <!-- INICIO DA LISTA DE USUARIOS -->


        <div class="col-md-12">
         

          <table class="table table-hover table-sm">
                <thead class="thead-dark">
              <tr>
                <th>Razão Social</th>
                <th>Número</th>
                <th>Tipo de Serviço</th>
                <th>Data Fechamento</th>
                <th>Valor</th>
         
              </tr>
            </thead>
            <tbody>
        <?php 
          while($linhas = mysqli_fetch_array($resultado)){
          $valortotal = (($valortotal) + ($linhas['valor']));
          

            if ($linhas['tiposervico'] == 1) {

              $linhas['tiposervico'] = "Gestão e Suporte";
            }
        
            if ($linhas['tiposervico'] == 2) {

              $linhas['tiposervico'] = "Cloud Backup";
            }
        
            if ($linhas['tiposervico'] == 3) {

              $linhas['tiposervico'] = "Cloud Server";
            }

            if ($linhas['tiposervico'] == 4) {

              $linhas['tiposervico'] = "Hosting";
            }

            if ($linhas['tiposervico'] == 5) {

              $linhas['tiposervico'] = "Vendas";
            }

            if ($linhas['tiposervico'] == 6) {

              $linhas['tiposervico'] = "Outros";
            }
        

            echo "<tr>";
              echo "<td>".$linhas['RazaoSocial']."</td>";
              echo "<td>".$linhas['numero']."</td>";
              echo "<td>".$linhas['tiposervico']."</td>";
              echo "<td>".$linhas['datamodificacao']."</td>";
              echo "<td> R$ ".number_format($linhas['valor'], 2, ',', '.')."</td>";
              //echo "<td> R$ ".$linhas['valor']."</td>";
              
            echo "</tr>";


          }

         
        ?>
            </tbody>
        
          

          
          </table>


          <table class="table table-sm">
                <thead class="thead-dark ">
                <tr>
                  
                 <td class="table-success text-right"><b> Valor Total: R$ <?php echo number_format($valortotal, 2, ',', '.'); ?></b></td>
              
                </tr>
              
            </thead>

          </table>
        </div>
   


   

    </main>

    </body>
</html>