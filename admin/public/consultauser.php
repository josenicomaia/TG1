<?php
session_start();
    include_once("conecta.php");
    include_once("security.php");
    include ("defaultadmin.php");
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
          <form class="form-signin" method="POST" action="exibeconsulta.php">
            
            <h1 class="h3 mb-3 font-weight-normal">Consultar Usuário</h1>
      
            <label for="inputEmail" class="sr-only">Email</label>
            <input type="text" name="email" class="form-control" placeholder="Digite o e-mail para pesquisar" required autofocus>
            <br />
      
            
      
                  <button class="btn btn-lg btn-outline-primary btn-block" type="submit">Pesquisar</button>
               </form>
           
        </div>




      </div>

    </main>




    </body>
</html>