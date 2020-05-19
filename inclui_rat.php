<?php
session_start();
    $mysqli = include_once("conecta.php");
    include_once("security.php");
    include ("defaulttech.php");
    $rattipo = $_POST['rattipo'];
    $ratfim = $_POST['ratfim'];
    $ratinicio = $_POST['ratinicio'];
    $ratnumero = $_POST['ratnumero'];
    $ratcodotrs = $_POST['ratcodotrs'];
    $ratdata = $_POST['ratdata'];


 

    if(($rattipo == "") || ($ratfim == "") || ($ratinicio == "")|| ($ratnumero == "") ){

            ?>

                  <div class="alert alert-danger" role="alert"> RAT não cadastrada. Falta preencher campos. </div> 
                  
              <?php

              header ("Refresh:3,cadastro_rats.php");

        }else{

      
    $sql = $mysqli->query("INSERT INTO rat (rattipo, ratfim, ratinicio, ratnumero, ratcodotrs, ratdata) VALUES ('$rattipo', '$ratfim', '$ratinicio', '$ratnumero', '$ratcodotrs', '$ratdata')");
       

    if (mysqli_affected_rows($mysqli) != 0) {

?>
                  <div class="alert alert-success" role="alert"> RAT Cadastrada com Sucesso </div> 
                  
              <?php
              
    header ("Refresh:1,cadastro_rats.php");

    }
}
 ?> 


<!doctype html>
<html lang="pt-br">
    <head>
        <title>Incluir RAT</title> 

    </head>
    <body>
    
	
    </body>
</html>