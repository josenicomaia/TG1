<?php
session_start();
    include_once("conecta.php");
    include_once("security.php");
    include ("defaultusers.php");
?>

<!doctype html>
<html lang="pt-br">
    <head>
       <title>Dashboard - Admin Área</title> 

    <!-- Custom styles for this template -->
    <link href="css/signin.css" rel="stylesheet">
    
    </head>
    <body>
    
	<main role="main" class="container">

      <div class="starter-template">
        

          <div class="container text-center">
          <form class="form-signin" method="POST" action="exibe_manutencao_contrato.php">
            
            <h1 class="h3 mb-3 font-weight-normal">Qual contrato deseja editar?</h1>
      
            <label for="inputEmail" class="sr-only">Código do Contrato</label>
            <input type="text" name="uid_contrato" class="form-control" placeholder="Código do contrato" required autofocus>
            <br />
      
            
      
                  <button class="btn btn-lg btn-outline-primary btn-block" type="submit">Pesquisar</button>
               </form>
           
        </div>




      </div>

    </main>
    </body>
</html>