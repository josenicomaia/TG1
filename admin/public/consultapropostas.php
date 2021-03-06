<?php

session_start();
    include_once("conecta.php");
    include_once("security.php");
    include("defaultcom.php");
    
    unset (
          $_SESSION['codigo'], 
          $_SESSION['RazaoSocial'],
          $_SESSION['CNPJ'],
          $_SESSION['estagio'],
          $_SESSION['tiposervico'], 
          $_SESSION['numero'],
          $_SESSION['datacriacao']
          );

?>




<!doctype html>
<html lang="pt-br">
    <head>
       <title>Dashboard - Área Comercial</title> 
       
       <!-- Custom styles for this template -->
        <link href="css/starter-template.css" rel="stylesheet">

    </head>
    <body>

<main role="main" class="container">

      <div class="starter-template">
        <h3>Consultar Propostas</h3>
        <!--<p class="lead">Use this document as a way to quickly start any new project.<br> All you get is this text and a mostly barebones HTML document.</p>-->
       
      </div>
      

            <!-- INICIO DO FORMULARIO DE CONSULTA -->

<form class="p-1 mb-1 bg-light text-dark" method="POST" action="realizaconsulta.php">


  <!--Exibe dados da tabela clientes -->
  <div class="form-row">
    <div class="form-group col-md-1">
      <label for="Codigo" class="col-form-label-sm">Cód.</label>
      <input type="text" class="form-control form-control-sm" name="Codigo" placeholder="Código">
    </div>
    <div class="form-group col-md-7">
      <label for="RazaoSocial" class="col-form-label-sm">Razão Social</label>
      <input type="text" class="form-control form-control-sm" name="RazaoSocial" placeholder="%Razão Social%">
    </div>
    <div class="form-group col-md-4">
      <label for="CNPJ" class="col-form-label-sm">CNPJ</label>
      <input type="text" class="form-control form-control-sm" name="CNPJ" placeholder="CNPJ">
    </div> 
  </div>

  <!--<div class="form-row">
   <div class="form-group col-md-3">
      <label for="Telefone1" class="col-form-label-sm">Telefone</label>
      <input type="text" class="form-control form-control-sm" name="Telefone1" placeholder="Razão Social">
    </div>     
    <div class="form-group col-md-3">
      <label for="Telefone2" class="col-form-label-sm">Telefone</label>
      <input type="text" class="form-control form-control-sm" name="Telefone2" placeholder="Razão Social">
    </div> 
    <div class="form-group col-md-6">
      <label for="Cidade" class="col-form-label-sm">Cidade</label>
      <input type="text" class="form-control form-control-sm" name="Cidade" placeholder="Razão Social">
    </div>  
  </div>-->

  <!-- INPUT para tabela PROPOSTAS -->

  <div class="form-row">
   <div class="form-group col-md-3">
      <label for="numero" class="col-form-label-sm">Número da Proposta</label>
      <input type="text" class="form-control form-control-sm" name="numero" placeholder="Número">
    </div>     
    <div class="form-group col-md-3">
      <label for="data" class="col-form-label-sm">Data</label>  
    <input type="date" class="form-control form-control-sm" name="valor" placeholder="data">
    </div> 
    
    <div class="form-group col-md-3">
      <label for="estagio" class="col-form-label-sm">Tipo de Serviço</label>
      <!--<input type="text" class="form-control form-control-sm" name="estagio" placeholder="Estágio da Proposta">-->
           <select nome="tiposervico" class="form-control" name="tiposervico">
          <option>Selecione...</option>
          <option value="1"<?php
            if ($consulta['tiposervico'] == 1) {
              echo 'selected';
            }
            ?> >1-Gestão e Suporte</option>
        
          <option value="2"<?php
            if ($consulta['tiposervico'] == 2) {
              echo 'selected';
            }
            ?> >2-Cloud Backup</option>
        
          <option value="3"<?php
            if ($consulta['tiposervico'] == 3) {
              echo 'selected';
            }
            ?> >3-Cloud Server</option>
            
          <option value="4" <?php
            if ($consulta['tiposervico'] == 4) {
              echo 'selected';
            }
            ?> >4-Hosting</option>

          <option value="5" <?php
            if ($consulta['tiposervico'] == 5) {
              echo 'selected';
            }
            ?> >5-Vendas</option>

          <option value="6" <?php
            if ($consulta['tiposervico'] == 6) {
              echo 'selected';
            }
            ?> >6-Outros</option>
        </select>
      </div>

    <div class="form-group col-md-3">
      <label for="estagio" class="col-form-label-sm"> Estágio </label>
      <!--<input type="text" class="form-control form-control-sm" name="estagio" placeholder="Estágio da Proposta">-->
        <select nome="estagio" class="form-control" name="estagio">
        <option>Selecione...</option>
          <option value="1"<?php
            if ($consulta['estagio'] == 1) {
              echo 'selected';
            }
            ?> >1-Enviada</option>
        
          <option value="2"<?php
            if ($consulta['estagio'] == 2) {
              echo 'selected';
            }
            ?> >2-Em Negociacão</option>
        
          <option value="3"<?php
            if ($consulta['estagio'] == 3) {
              echo 'selected';
            }
            ?> >3-Em Fechamento</option>
            
          <option value="4" <?php
            if ($consulta['estagio'] == 4) {
              echo 'selected';
            }
            ?> >4-Fechada</option>

          <option value="5" <?php
            if ($consulta['estagio'] == 5) {
              echo 'selected';
            }
            ?> >5-Fechada Sem Resposta</option>

          <option value="6" <?php
            if ($consulta['estagio'] == 6) {
              echo 'selected';
            }
            ?> >6-Fechada Perdida</option>
        </select>
    </div>  
  </div>  

  <!--<div class="form-row">
    <div class="form-group col-md-6">
      <label for="contato" class="col-form-label-sm">Contato</label>
      <input type="text" class="form-control form-control-sm" name="contato" placeholder="Razão Social">
    </div>     
    <div class="form-group col-md-6">
      <label for="email" class="col-form-label-sm">E-mail</label>
      <input type="text" class="form-control form-control-sm" name="email" placeholder="Razão Social">
    </div>  
  </div>

  <div class="form-group">
    <label for="resumo">Resumo da Proposta</label>
    <textarea class="form-control form-control-sm" name="resumo" rows="3" > </textarea>
  </div>

  <div class="form-group">
    <label for="descricao">Histórico</label>
    <textarea class="form-control form-control-sm" name="descricao" rows="5" >  </textarea>
  </div>

  <div class="form-group">
    <label for="arquivos">Proposta Enviada</label>
    <input type="file" class="form-control-file" name="arquivos">
  </div>-->

</div>
<button type="submit" class="btn btn-outline-primary">Consultar</button>

  
</form>
      
    </main>

    </body>
</html>
