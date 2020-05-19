<?php
session_start();
    include_once("conecta.php");
    include_once("security.php");
    include ("defaultusers.php");
    $uid_cliente = $_SESSION['uid_cliente'];

    $totalhoras = $_POST['totalhoras'];
    $valorhorahe = $_POST['valorhorahe'];
    $tiposervicocontrato = $_POST['tiposervicocontrato'];
    $emailcontrato = $_POST['emailcontrato'];
    $contatocontrato = $_POST['contatocontrato'];
    $resumocontrato = $_POST['resumocontrato'];
    $historicocontrato = $_POST['historicocontrato'];
    $codotrs = $_POST['codotrs'];
    $valorcontrato = $_POST['valorcontrato'];
    $valoratual = $_POST['valoratual'];
    $status = $_POST['status'];
    $dataassinatura = $_POST['dataassinatura'];
   
    



?>

<!doctype html>
<html lang="pt-br">
    <head>
       <title>Dashboard - Área Comercial</title> 

    </head>
    <body>
    
    <?php

	if(($valorhorahe == "") || ($totalhoras == "") || ($resumocontrato == "")|| ($contatocontrato == "") || ($emailcontrato == "")){

            ?>

                  <div class="alert alert-danger" role="alert"> Proposta não cadastrada. Falta preencher campos. </div> 
                  
              <?php

              header ("Refresh:3,consulta_cadastro_contrato.php");

        }else{



      
    $sql = mysql_query("INSERT INTO contratos (totalhoras, valorhorahe, tiposervicocontrato, emailcontrato, contatocontrato, resumocontrato, historicocontrato, datacriacao, cliente_uid,codotrs, valorcontrato, valoratual, status, dataassinatura ) VALUES ('$totalhoras', '$valorhorahe', '$tiposervicocontrato', '$emailcontrato', '$contatocontrato', '$resumocontrato', '$historicocontrato', NOW(), '$uid_cliente', '$codotrs', '$valorcontrato', '$valoratual', '$status', '$dataassinatura')");


    if (mysql_affected_rows() !=0) {

?>
                  <div class="alert alert-success" role="alert"> Contrato cadastrado com Sucesso </div> 
                  
              <?php
              
    header ("Refresh:2,consulta_cadastro_contrato.php");

    }
}
 ?>

    </body>
</html>
