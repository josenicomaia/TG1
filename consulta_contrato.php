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
        <link href="css/starter-template.css" rel="stylesheet">

    </head>
    <body>

<main role="main" class="container">

      <div class="starter-template">
        <h3>Consultar Contratos</h3>
     
       
      </div>
      

            <!-- INICIO DO FORMULARIO DE CONSULTA -->

<form class="p-1 mb-1 bg-light text-dark" method="POST" action="realizaconsulta_contrato.php">


  <!--Exibe dados da tabela clientes -->
  <div class="form-row">
    <div class="form-group col-md-7">
      <label for="RazaoSocial" class="col-form-label-sm">Razão Social</label>
      <input type="text" class="form-control form-control-sm" name="RazaoSocial" placeholder="%Razão Social%">
    </div>
    <div class="form-group col-md-4">
      <label for="CNPJ" class="col-form-label-sm">CNPJ</label>
      <input type="text" class="form-control form-control-sm" name="CNPJ" placeholder="CNPJ">
    </div> 
        
  </div>



  <!-- INPUT para tabela PROPOSTAS -->

  <div class="form-row">
    <div class="form-group col-md-2">
      <label for="codotrs" class="col-form-label-sm">Código OTRS</label>
      <input type="text" class="form-control form-control-sm" name="codotrs" placeholder="Código OTRS">
    </div> 

    <div class="form-group col-md-2">
      <label for="codotrs" class="col-form-label-sm">Código Contrato</label>
      <input type="text" class="form-control form-control-sm" name="uid_contrato" placeholder="Cód. Contrato">
    </div> 

    <div class="form-group col-md-1">
      <label for="totalhoras" class="col-form-label-sm">Horas</label>
      <input type="number" class="form-control form-control-sm" name="totalhoras" placeholder="Horas">
    </div>
    
    <div class="form-group col-md-3">
      <label for="tiposervicocontrato" class="col-form-label-sm">Tipo de Serviço</label>
      <!--<input type="text" class="form-control form-control-sm" name="estagio" placeholder="Estágio da Proposta">-->
           <select nome="tiposervicocontrato" class="form-control" name="tiposervicocontrato">
        <option> Selecione... </option>
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

          <option value="5" <?php
            if ($consulta['tiposervicocontrato'] == 5) {
              echo 'selected';
            }
            ?> >5-Vendas</option>

          <option value="6" <?php
            if ($consulta['tiposervicocontrato'] == 6) {
              echo 'selected';
            }
            ?> >6-Outros</option>
        </select>
    </div>
       <div class="form-group col-md-2">
      <label for="tiposervicocontrato" class="col-form-label-sm">Status</label>
      <!--<input type="text" class="form-control form-control-sm" name="estagio" placeholder="Estágio da Proposta">-->
                    <select nome="status" class="form-control" name="status">
                      <option> Selecione... </option>
                        <option value="1">1-Ativo</option>
                        <option value="2">2-Inativo</option>

                    </select>
    </div>    

    
  </div>





  

  <!--<div class="form-group">
    <label for="arquivos">Proposta Enviada</label>
    <input type="file" class="form-control-file" name="arquivos">
  </div>-->

<button type="submit" class="btn btn-outline-primary">Consultar</button>
  
</form>
      
    </main>

    </body>
</html>
