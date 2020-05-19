<?php
session_start();
    include_once("conecta.php");
    include_once("security.php");
    include ("defaultcom.php");
?>

<!doctype html>
<head>
       <title>Dashboard - Admin Área</title> 
        <!-- Custom styles for this template -->
        <link href="css/signin.css" rel="stylesheet">
    </head>
    <body>
    
    <main role="main" class="container">

      <div class="starter-template">
        

          <div class="container text-center">
          <form class="form-signin" method="POST" action="exibeconsultacliente.php">
            
            <h3 class="h3 mb-3 font-weight-normal">Consultar Cliente</h3>
      
            <label for="inputEmail" class="sr-only">Razão Social</label>
            <input type="text" name="RazaoSocial" class="form-control" placeholder="Nome do Cliente" required autofocus>
            <br />
      
            
      
                  <button class="btn btn-lg btn-outline-primary btn-block" type="submit">Pesquisar</button>
               </form>
           
        </div>




      </div>

    </main>
    </body>
</html>