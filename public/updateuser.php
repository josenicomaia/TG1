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

    
  if(($nome == "") || ($senha == "")|| ($username == "")|| ($email == "")){

            ?>

                  <div class="alert alert-danger" role="alert"> Edição não realizada </div> 
                  
              <?php

              header ("Refresh:3,editauser.php");

        }else{

    // Gerar Md5 da Senha antes de gravar no banco
    $senha = md5($senha);
    
    $sql = $mysqli->query("UPDATE usuarios SET nome='$nome', senha='$senha', username='$username', id_acesso='$id_acesso', email='$email', modificacao=NOW() WHERE email = '$email' ");

    if (mysqli_affected_rows($mysqli) !=0) {

?>
                  <div class="alert alert-success" role="alert"> Usuário Editado com Sucesso </div> 
                  
              <?php
              
    header ("Refresh:2,editauser.php");

    }
}
 ?>

<!doctype html>
<html lang="pt-br">
    <head>
       <title>Dashboard - Admin Área</title> 

    </head>
    <body>
    
	
    </body>
</html>