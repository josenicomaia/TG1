<?php

session_start();
    include_once("conecta.php");
    include_once("security.php");
    include("defaultusers.php");
    
    unset (
          $_SESSION['totalhoras'], 
          $_SESSION['RazaoSocial'],
          $_SESSION['CNPJ'],
          $_SESSION['tiposervicocontrato'], 
          $_SESSION['codotrs'],
          $_SESSION['status'],
          $_SESSION['uid_contrato']
          );

?>




<!doctype html>
<html lang="pt-br">
    <head>
       <title>Dashboard - Área Financeira</title> 
       
       <!-- Custom styles for this template -->
        <link href="css/signin.css" rel="stylesheet">

    </head>

<body>
    
    <main role="main" class="container">

      <div class="starter-template">
        

          <div class="container text-center">
          <form class="form-signin" method="POST" action="realizaconsulta_lista_contrato.php">
            
            <h3 class="h3 mb-3 font-weight-normal">Listar Contratos</h3>
      
            <label for="tiposervicocontrato" class="col-form-label-sm">Tipo de contrato</label>
      <!--<input type="text" class="form-control form-control-sm" name="estagio" placeholder="Estágio da Proposta">-->
           <select nome="tiposervicocontrato" class="form-control form-control-lg p-1 mb-1 bg-light text-dark" name="tiposervicocontrato">
       
          <option value="1"<?php
            if ($consulta['tiposervicocontrato'] == 1) {
              echo 'selected';
            }
            ?> >1-Gestão e Suporte</option>
        
          <option value="2"<?php
            if ($consulta['tiposervicocontrato'] == 2) {
              echo 'selected';
            }
            ?> >2-Cloud Backup</option>
        
          <option value="3"<?php
            if ($consulta['tiposervicocontrato'] == 3) {
              echo 'selected';
            }
            ?> >3-Cloud Server</option>
            
          <option value="4" <?php
            if ($consulta['tiposervicocontrato'] == 4) {
              echo 'selected';
            }
            ?> >4-Hosting</option>
            <option value="0" <?php
            if ($consulta['tiposervicocontrato'] == 0) {
              echo 'selected';
            }
            ?> >0-Todos</option>
            <br/>
          </select>
          <br>
            
      
                  <button class="btn btn-lg btn-outline-primary btn-block" type="submit">Listar</button>
               </form>
           
        </div>




      </div>

    </main>
    </body>
</html>
