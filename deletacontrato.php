<?php
    session_start();
    include_once("conecta.php");
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
    
   $sql=mysql_query("DELETE FROM contratos WHERE uid_contrato = '$uid_contrato' "); 
   $exclui = mysql_fetch_assoc($sql);


    if (mysql_affected_rows() !=0) {

?>
                  <div class="alert alert-success" role="alert"> Contrato Excluído com Sucesso </div> 
                  
              <?php
              
    header ("Refresh:2,consulta_contrato_manutencao.php");

    }

 ?>
	
    </body>
</html>