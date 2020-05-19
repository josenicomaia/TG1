<?php
    session_start();
    $mysqli = include_once("conecta.php");
    include_once("security.php");
    include ("defaulttech.php");
    $ratnumero = $_SESSION['ratnumero'];
?>

<!doctype html>
<html lang="pt-br">
    <head>
       <title>Dashboard - Admin Área</title> 

    </head>
    <body>
<?php
    
   $sql = $mysqli->query("DELETE FROM rat WHERE ratnumero = '$ratnumero' ");
   $exclui = mysqli_fetch_assoc($sql);


    if (mysqli_affected_rows($mysqli) !=0) {

?>
                  <div class="alert alert-success" role="alert"> RAT Excluída com Sucesso </div> 
                  
              <?php
              
    header ("Refresh:2,consulta_rat_unica.php");

    }

 ?>
	
    </body>
</html>