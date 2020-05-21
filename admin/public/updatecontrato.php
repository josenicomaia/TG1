<?php
session_start();
    $mysqli = include_once("conecta.php");
    include_once("security.php");
    include ("defaultusers.php");
    $uid_contrato = $_SESSION['uid_contrato'];
    
    $uid_cliente = $_SESSION['uid_cliente'];
    $datacriacao = $_SESSION['datacriacao'];


   
    $totalhoras = $_POST['totalhoras'];
    $valorhorahe = $_POST['valorhorahe'];
    $tiposervicocontrato = $_POST['tiposervicocontrato'];
    $emailcontrato = $_POST['emailcontrato'];
    $contatocontrato = $_POST['contatocontrato'];
    $resumocontrato = $_POST['resumocontrato'];
    $historicocontrato = $_POST['historicocontrato'];
    $valorcontrato = $_POST['valorcontrato'];
    $valoratual = $_POST['valoratual'];
    $codotrs = $_POST['codotrs'];
    $status = $_POST['status'];
    $dataassinatura = $_POST['dataassinatura'];
    $datacriacao = $_SESSION['datacriacao'];
  
    



?>

<!doctype html>
<html lang="pt-br">
    <head>
       <title>Dashboard - Área Comercial</title> 

    </head>
    <body>
    
    <?php

	if(($totalhoras == "") || ($valorhorahe == "") || ($resumocontrato == "")|| ($tiposervicocontrato == "") || ($valorcontrato == "") || ($valoratual == "") || ($codotrs == "") || ($historicocontrato == "")){

            ?>

                  <div class="alert alert-danger" role="alert"> Contrato não atualizado. Falta preencher campos. </div> 
                  
              <?php

              header ("Refresh:3,consulta_contrato_manutencao.php");

        }else{
 

 $sql = $mysqli->query("UPDATE contratos SET totalhoras='$totalhoras', valorhorahe='$valorhorahe', tiposervicocontrato='$tiposervicocontrato', emailcontrato='$emailcontrato', contatocontrato='$contatocontrato', resumocontrato='$resumocontrato', historicocontrato='$historicocontrato', datacriacao='$datacriacao', cliente_uid='$uid_cliente', codotrs='$codotrs', valorcontrato='$valorcontrato', valoratual='$valoratual', datamodificacao=NOW(), status='$status', dataassinatura='$dataassinatura' WHERE uid_contrato='$uid_contrato' ");

    if (mysqli_affected_rows($mysqli) !=0) {

?>
                  <div class="alert alert-success" role="alert"> Contrato atualizado com Sucesso </div> 
                  
              <?php
              
    header ("Refresh:2,consulta_contrato_manutencao.php");

    }
}
 ?>

    </body>
</html>