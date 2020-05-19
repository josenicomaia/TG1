<?php
session_start();
    $mysqli = include_once("conecta.php");
    include_once("security.php");
    include ("defaultadmin.php");
    $nome = $_POST['nome'];
    $senha = $_POST['senha'];
    $username = $_POST['username'];
    $id_acesso = $_POST['id_acesso'];
    $email = $_POST['email'];
?>

<!doctype html>
<html lang="pt-br">
    <head>
       <title>Dashboard - Admin Área</title> 

    </head>
    <body>
    
    <?php

	if(($nome == "") || ($senha == "") || ($username == "")|| ($email == "")){

            ?>

                  <div class="alert alert-danger" role="alert"> Cadastro não realizado </div> 
                  
              <?php

              header ("Refresh:3,caduser.php");

        }else{

    // Gerar Md5 da Senha antes de gravar no banco
    $senha = md5($senha);
    
    $sql = $mysqli->query("INSERT INTO usuarios (nome, senha, username, id_acesso, email, criacao) VALUES ('$nome', '$senha', '$username', '$id_acesso', '$email', NOW())");

    if (mysqli_affected_rows($mysqli) !=0) {

?>
                  <div class="alert alert-success" role="alert"> Usuário Cadastrado com Sucesso </div> 
                  
              <?php
              
    header ("Refresh:2,caduser.php");

    }
}
 ?>

    </body>
</html>