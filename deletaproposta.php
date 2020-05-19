<?php
    session_start();
    include_once("conecta.php");
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
    
   $sql=mysql_query("DELETE FROM propostas WHERE numero = '$numero' "); 
   $exclui = mysql_fetch_assoc($sql);


    if (mysql_affected_rows() !=0) {

?>
                  <div class="alert alert-success" role="alert"> Proposta Excluída com Sucesso </div> 
                  
              <?php
              
    header ("Refresh:2,consulta_proposta_manutencao.php");

    }

 ?>
	
    </body>
</html>