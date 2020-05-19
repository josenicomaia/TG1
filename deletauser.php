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

    $mail = $_SESSION['mail'];
?>

<!doctype html>
<html lang="pt-br">
    <head>
       <title>Dashboard - Admin Área</title> 

    </head>
    <body>
<?php
    
   $sql = $mysqli->query("DELETE FROM usuarios WHERE email = '$mail' ");
   $exclui = mysqli_fetch_assoc($sql);


    if (mysqli_affected_rows($mysqli) !=0) {

?>
                  <div class="alert alert-success" role="alert"> Usuário Excluído com Sucesso </div> 
                  
              <?php
              
    header ("Refresh:2,editauser.php");

    }

 ?>
	
    </body>
</html>