<?php
    session_start();
    $mysqli = include_once("conecta.php");
    include_once("security.php");
    include ("defaultcom.php");
    $numero = $_SESSION['numero'];
?>

<!doctype html>
<html lang="pt-br">
    <head>
       <title>Dashboard - Admin Área</title> 

    </head>
    <body>
<?php
    
   $sql = $mysqli->query("DELETE FROM propostas WHERE numero = '$numero' ");
   $exclui = mysqli_fetch_assoc($sql);


    if (mysqli_affected_rows($mysqli) !=0) {

?>
                  <div class="alert alert-success" role="alert"> Proposta Excluída com Sucesso </div> 
                  
              <?php
              
    header ("Refresh:2,consulta_proposta_manutencao.php");

    }

 ?>
	
    </body>
</html>