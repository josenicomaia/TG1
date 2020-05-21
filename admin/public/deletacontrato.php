<?php
    session_start();
    $mysqli = include_once("conecta.php");
    include_once("security.php");
    include ("defaultusers.php");
    $uid_contrato = $_SESSION['uid_contrato'];
?>

<!doctype html>
<html lang="pt-br">
    <head>
       <title>Dashboard - Admin Área</title> 

    </head>
    <body>
<?php
    
   $sql = $mysqli->query("DELETE FROM contratos WHERE uid_contrato = '$uid_contrato' ");
   $exclui = mysqli_fetch_assoc($sql);


    if (mysqli_affected_rows($mysqli) !=0) {

?>
                  <div class="alert alert-success" role="alert"> Contrato Excluído com Sucesso </div> 
                  
              <?php
              
    header ("Refresh:2,consulta_contrato_manutencao.php");

    }

 ?>
	
    </body>
</html>