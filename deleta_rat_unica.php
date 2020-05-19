<?php
    session_start();
    include_once("conecta.php");
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
    
   $sql=mysql_query("DELETE FROM rat WHERE ratnumero = '$ratnumero' "); 
   $exclui = mysql_fetch_assoc($sql);


    if (mysql_affected_rows() !=0) {

?>
                  <div class="alert alert-success" role="alert"> RAT Excluída com Sucesso </div> 
                  
              <?php
              
    header ("Refresh:2,consulta_rat_unica.php");

    }

 ?>
	
    </body>
</html>