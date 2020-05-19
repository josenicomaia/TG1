<?php
session_start();
    include_once("conecta.php");
    include_once("security.php");
    include ("defaultcom.php");
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
          <form class="form-signin" method="POST" action="exibe_manutencao_proposta.php">
            
            <h1 class="h3 mb-3 font-weight-normal">Qual proposta deseja editar?</h1>
      
            <label for="inputEmail" class="sr-only">Número</label>
            <input type="text" name="numero" class="form-control" placeholder="Digite número da proposta" required autofocus>
            <br />
      
            
      
                  <button class="btn btn-lg btn-outline-primary btn-block" type="submit">Pesquisar</button>
               </form>
           
        </div>




      </div>

    </main>
    </body>
</html>