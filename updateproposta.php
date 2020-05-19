<?php
session_start();
    $mysqli = include_once("conecta.php");
    include_once("security.php");
    include ("defaultcom.php");
    $numero = $_SESSION['numero'];
    $arquivos = $_POST['arquivos'];
    $valor = $_POST['valor'];
    $estagio = $_POST['estagio'];
    $numero = $_POST['numero'];
    $descricao = $_POST['descricao'];
    $contato = $_POST['contato'];
    $email = $_POST['email'];
    $resumo = $_POST['resumo'];
    $tiposervico = $_POST['tiposervico'];
    $cliente_uid = $_SESSION['uid_cliente'];
    $datacriacao = $_SESSION['datacriacao'];
    



?>

<!doctype html>
<html lang="pt-br">
    <head>
       <title>Dashboard - Área Comercial</title> 

    </head>
    <body>
    
    <?php

	if(($valor == "") || ($numero == "") || ($descricao == "")|| ($contato == "") || ($email == "")){

            ?>

                  <div class="alert alert-danger" role="alert"> Proposta não atualizada. Falta preencher campos. </div> 
                  
              <?php

              header ("Refresh:3,consulta_proposta_manutencao.php");

        }else{
 
      
    $sql = $mysqli->query("UPDATE propostas SET arquivos='$arquivos', valor='$valor', estagio='$estagio', descricao='$descricao', datacriacao='$datacriacao', contato='$contato', email='$email', cliente_uid='$cliente_uid', resumo='$resumo', tiposervico='$tiposervico',numero='$numero', datamodificacao=NOW() WHERE numero='$numero'");

    if (mysqli_affected_rows($mysqli) !=0) {

?>
                  <div class="alert alert-success" role="alert"> Proposta Atualizada com Sucesso </div> 
                  
              <?php
              
    header ("Refresh:2,consulta_proposta_manutencao.php");

    }
}
 ?>

    </body>
</html>