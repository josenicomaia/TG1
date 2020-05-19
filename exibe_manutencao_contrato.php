<?php
session_start();
    include_once("conecta.php");
    include_once("security.php");
    include("defaultusers.php");
    //$nome = $_POST['nome'];
    //$senha = $_POST['senha'];
    //$username = $_POST['username'];
    //$id_acesso = $_POST['id_acesso'];
    //$email = $_POST['email'];
    //$_SESSION['mail'] = $email;
    $uid_contrato = $_POST['uid_contrato'];
    $_SESSION['uid_contrato'] = $uid_contrato;
    


    // consulta das tabelas clientes e contratos

     $resultado=mysql_query("SELECT contratos.*, clientes.* FROM contratos INNER JOIN clientes ON contratos.cliente_uid = clientes.uid_cliente where contratos.uid_contrato =  '$uid_contrato' LIMIT 1" );
    $linhas=mysql_num_rows($resultado);
    $consulta = mysql_fetch_assoc($resultado);

    $uid_cliente = $consulta['uid_cliente'];
    $datacriacao = $consulta['datacriacao'];
    $_SESSION['uid_cliente'] = $uid_cliente;
    $_SESSION['datacriacao'] = $datacriacao;
   


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
        <h3>Manutenção de Contratos</h3>
        <!--<p class="lead">Use this document as a way to quickly start any new project.<br> All you get is this text and a mostly barebones HTML document.</p>-->
       
      </div>
      

            <!-- INICIO DO FORMULARIO DE CONSULTA -->

<?php
    
   
if(($consulta['uid_contrato']) == ""){

      ?>

               
                  <div class="alert alert-danger" role="alert"> Contrato não encontrado </div> 
                  
              <?php

              header ("Refresh:3,consulta_contrato_manutencao.php");

      }else{

 ?>
<!-- ************************** -->

<form class="p-1 mb-1 bg-light text-dark" method="POST" action="updatecontrato.php">


 <!--Exibe dados da tabela clientes -->
  <div class="form-row">
    <div class="form-group col-md-1">
      <label for="Codigo" class="col-form-label-sm">Cód.</label>
      <input type="text" class="form-control form-control-sm" name="Codigo" value="<?php echo $consulta['Codigo']; ?>" readonly>
    </div>
        <div class="form-group col-md-2">
      <label for="codotrs" class="col-form-label-sm">Código Contrato</label>
      <input type="text" class="form-control form-control-sm" name="uid_contrato" value="<?php echo $consulta['uid_contrato']; ?>"readonly>
    </div> 
    <div class="form-group col-md-7">
      <label for="RazaoSocial" class="col-form-label-sm">Razão Social</label>
      <input type="text" class="form-control form-control-sm" name="RazaoSocial" value="<?php echo $consulta['RazaoSocial']; ?>" readonly>
    </div>
    <div class="form-group col-md-2">
      <label for="CNPJ" class="col-form-label-sm">CNPJ</label>
      <input type="text" class="form-control form-control-sm" name="CNPJ" value="<?php echo $consulta['CNPJ']; ?>" readonly>
    </div> 
  </div>

  <div class="form-row">
   <div class="form-group col-md-3">
      <label for="Telefone1" class="col-form-label-sm">Telefone</label>
      <input type="text" class="form-control form-control-sm" name="Telefone1" value="<?php echo $consulta['Telefone1']; ?>" readonly>
    </div>     
    <div class="form-group col-md-3">
      <label for="Telefone2" class="col-form-label-sm">Telefone</label>
      <input type="text" class="form-control form-control-sm" name="Telefone2" value="<?php echo $consulta['Telefone2']; ?>" readonly>
    </div> 
    <div class="form-group col-md-6">
      <label for="Cidade" class="col-form-label-sm">Cidade</label>
      <input type="text" class="form-control form-control-sm" name="Cidade" value="<?php echo utf8_encode($consulta['Cidade']); ?>" readonly>
    </div>  
  </div>

  <!-- INPUT para tabela PROPOSTAS -->

  <div class="form-row">
   <div class="form-group col-md-1">
      <label for="totalhoras" class="col-form-label-sm">Horas</label>
      <input type="number" class="form-control form-control-sm" name="totalhoras" value="<?php echo $consulta['totalhoras']; ?>">
    </div>     
    <div class="form-group col-md-2">
      <label for="valorhorahe" class="col-form-label-sm">Valor HE (R$)</label>
      <input type="text" class="form-control form-control-sm" name="valorhorahe" value="<?php echo $consulta['valorhorahe']; ?>">
    </div> 
    <div class="form-group col-md-2">
      <label for="valorcontrato" class="col-form-label-sm">Valor Inicial (R$)</label>
      <input type="text" class="form-control form-control-sm" name="valorcontrato" value="<?php echo $consulta['valorcontrato']; ?>">
    </div>  
    <div class="form-group col-md-2">
      <label for="valoratual" class="col-form-label-sm">Valor Atual (R$)</label>
      <input type="text" class="form-control form-control-sm" name="valoratual" value="<?php echo $consulta['valoratual']; ?>">
    </div>  
    <div class="form-group col-md-2">
      <label for="valorcontrato" class="col-form-label-sm">Data Assinatura</label>
      <input type="date" class="form-control form-control-sm" name="dataassinatura" value="<?php echo $consulta['dataassinatura']; ?>">
    </div>  
    <div class="form-group col-md-3">
      <label for="tiposervicocontrato" class="col-form-label-sm">Tipo de Serviço</label>
      <!--<input type="text" class="form-control form-control-sm" name="estagio" placeholder="Estágio da Proposta">-->
                    <select nome="tiposervicocontrato" class="form-control" name="tiposervicocontrato">
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
      

    
  </div>

  <div class="form-row">
    <div class="form-group col-md-2">
      <label for="codotrs" class="col-form-label-sm">Código OTRS</label>
      <input type="text" class="form-control form-control-sm" name="codotrs" value="<?php echo $consulta['codotrs']; ?>">
    </div> 
   <div class="form-group col-md-4">
      <label for="contato" class="col-form-label-sm">Contato</label>
      <input type="text" class="form-control form-control-sm" name="contatocontrato" value="<?php echo $consulta['contatocontrato']; ?>">
    </div>     
    <div class="form-group col-md-4">
      <label for="email" class="col-form-label-sm">E-mail</label>
      <input type="text" class="form-control form-control-sm" name="emailcontrato" value="<?php echo $consulta['emailcontrato']; ?>">
    </div>  
    <div class="form-group col-md-2">
      <label for="tiposervicocontrato" class="col-form-label-sm">Status</label>
      <!--<input type="text" class="form-control form-control-sm" name="estagio" placeholder="Estágio da Proposta">-->
                    <select nome="status" class="form-control" name="status">
                       <option value="1"<?php
            if ($consulta['status'] == 1) {
              echo 'selected';
            }
            ?> >1-Ativo</option>
        
          <option value="2"<?php
            if ($consulta['status'] == 2) {
              echo 'selected';
            }
            ?> >2-Inativo</option>
                    </select>
    </div>    
  </div>

  <div class="form-group">
    <label for="resumocontrato" class="col-form-label-sm">Resumo do Contrato</label>
    <textarea class="form-control form-control-sm" name="resumocontrato" rows="3"><?php echo $consulta['resumocontrato']; ?></textarea>
  </div>

  <div class="form-group">
    <label for="historicocontrato" class="col-form-label-sm">Histórico do contrato</label>
    <textarea class="form-control form-control-sm" name="historicocontrato" rows="5"><?php echo $consulta['historicocontrato']; ?></textarea>
  </div>

  <!--<div class="form-group">
    <label for="arquivos">Proposta Enviada</label>
    <input type="file" class="form-control-file" name="arquivos">
  </div>-->
<button type="submit" class="btn btn-outline-success">Atualizar</button>
<a class="btn btn-outline-danger " href="deletacontrato.php" role="button">Excluir</a>
  
</form>



<!--************************** -->

<!-- INICIO DO FORM-->



<!--Final do FORME-->

<?php
}
?>
      
    </main>

    </body>
</html>