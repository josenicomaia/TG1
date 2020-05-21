<?php
session_start();
    
    include_once("security.php");
    include ("defaultcom.php");
?>

<!doctype html>
<html lang="pt-br">
    <head>
        
    <!-- Custom styles for this template -->
    <link href="css/signin.css" rel="stylesheet">

    </head>
    <body>
	   <div class="starter-template">
         <h3>Consulta propostas em aberto</h3>
         <br />
            <div class="container text-center">
                <form class="form-signin" method="POST" action="listapropostaabertas.php">

                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="datainicial">Data Inicial</label>
                            <input type="date" class="form-control" name="datacriacao" class="form-control" placeholder="Data" required autofocus>
                        </div>

                        <div class="form-group col-md-6">
                            <label for="datafinal">Data Final</label>
                            <input type="date" class="form-control" name="datacriacaofinal" class="form-control" placeholder="Data" required autofocus>
                        </div>
    
                     </div>
                    <button class="btn btn-lg btn-outline-primary btn-block" type="submit">Listar</button>
                </form>
            </div>
        </div>
    </body>
</html>