<?php
session_start();
    include_once("conecta.php");
    include_once("security.php");
    include ("defaultusers.php");
?>

<!doctype html>
<head>
       <title>Dashboard - Área Financeira </title> 
        <!-- Custom styles for this template -->
        <link href="css/signin.css" rel="stylesheet">
    </head>
    <body>
    
    <main role="main" class="container">

      <div class="starter-template">
        

          <div class="container text-center">
          <form class="form-signin" method="POST" action="cadastro_contrato.php">
            
            <h3 class="h3 mb-3 font-weight-normal">Cadastrar contrato para qual cliente?</h3>
      
            <label for="inputEmail" class="sr-only">Razão Social</label>
            <input type="text" name="RazaoSocial" class="form-control" placeholder="Nome do Cliente" required autofocus>
            <br />
      
            
      
                  <button class="btn btn-lg btn-outline-primary btn-block" type="submit">Cadastrar</button>
               </form>
           
        </div>




      </div>

    </main>
    </body>
</html>