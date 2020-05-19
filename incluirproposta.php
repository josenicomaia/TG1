<?php
session_start();
    include_once("conecta.php");
    include_once("security.php");
    include ("defaultcom.php");
    $uid_cliente = $_SESSION['uid_cliente'];

    $arquivos = $_POST['arquivos'];
    $valor = $_POST['valor'];
    $estagio = $_POST['estagio'];
    $numero = $_POST['numero'];
    $descricao = $_POST['descricao'];
    $contato = $_POST['contato'];
    $email = $_POST['email'];
    $resumo = $_POST['resumo'];
    $tiposervico = $_POST['tiposervico']
    



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

                  <div class="alert alert-danger" role="alert"> Proposta não cadastrada. Falta preencher campos. </div> 
                  
              <?php

              header ("Refresh:3,consulta_cliente_proposta.php");

        }else{

      
    $sql = mysql_query("INSERT INTO propostas (arquivos, valor, estagio, numero, descricao, datacriacao, contato, email, cliente_uid, resumo, tiposervico) VALUES ('$arquivos', '$valor', '$estagio', '$numero', '$descricao', NOW(), '$contato', '$email', '$uid_cliente', '$resumo', '$tiposervico')");

    if (mysql_affected_rows() !=0) {

?>
                  <div class="alert alert-success" role="alert"> Proposta cadastrada com Sucesso </div> 
                  
              <?php
              
    header ("Refresh:2,consulta_cliente_proposta.php");

    }
}
 ?>

    </body>
</html>