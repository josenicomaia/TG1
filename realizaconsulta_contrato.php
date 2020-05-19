<?php
session_start();
    include_once("conecta.php");
    include_once("security.php");
    include("defaultusers.php");



$sql = mysql_query("INSERT INTO contratos (totalhoras, valorhorahe, tiposervicocontrato, email, contato, resumocontrato, historicocontrato, datacriacao, cliente_uid,codotrs, valorcontrato, valoratual ) VALUES ('$totalhoras', '$valorhorahe', '$tiposervicocontrato', '$email', '$contato', '$resumocontrato', '$historicocontrato', NOW(), '$uid_cliente', '$codotrs', '$valorcontrato', '$valoratual')");



    
    $RazaoSocial = empty($_POST['RazaoSocial'])?$_SESSION['RazaoSocial']:$_POST['RazaoSocial'];
    $_SESSION['RazaoSocial'] = $RazaoSocial;

    $codotrs = empty($_POST['codotrs'])?$_SESSION['codotrs']:$_POST['codotrs'];
    $_SESSION['codotrs'] = $codotrs;

    $CNPJ = empty($_POST['CNPJ'])?$_SESSION['CNPJ']:$_POST['CNPJ'];
    $_SESSION['CNPJ'] = $CNPJ;

    $totalhoras = empty($_POST['totalhoras'])?$_SESSION['totalhoras']:$_POST['totalhoras'];
    $_SESSION['totalhoras'] = $totalhoras;

    $tiposervicocontrato = empty($_POST['tiposervicocontrato'])?$_SESSION['tiposervicocontrato']:$_POST['tiposervicocontrato'];
    $_SESSION['tiposervicocontrato'] = $tiposervicocontrato;

        $status = empty($_POST['status'])?$_SESSION['status']:$_POST['status'];
    $_SESSION['status'] = $status;

        $uid_contrato = empty($_POST['uid_contrato'])?$_SESSION['uid_contrato']:$_POST['uid_contrato'];
    $_SESSION['uid_contrato'] = $uid_contrato;


    $page = empty($_REQUEST['page'])?0:$_REQUEST['page'];


    // consulta das tabelas clientes e propostas





   $resultado=mysql_query("SELECT contratos.*, clientes.* FROM contratos INNER JOIN clientes ON contratos.cliente_uid = clientes.uid_cliente where  clientes.RazaoSocial like '$RazaoSocial' or clientes.CNPJ like '$CNPJ' or contratos.totalhoras like  '$totalhoras' or contratos.codotrs like  '$codotrs' or contratos.tiposervicocontrato = '$tiposervicocontrato' or contratos.status = '$status' or contratos.uid_contrato = '$uid_contrato' LIMIT $page,1" );
    $linhas=mysql_num_rows($resultado);
    $consulta = mysql_fetch_assoc($resultado);

    $contador=mysql_query("SELECT COUNT(*) as count FROM contratos INNER JOIN clientes ON contratos.cliente_uid = clientes.uid_cliente where  clientes.RazaoSocial like '$RazaoSocial' or clientes.CNPJ like '$CNPJ' or contratos.totalhoras like  '$totalhoras' or contratos.codotrs like  '$codotrs' or contratos.tiposervicocontrato = '$tiposervicocontrato' or contratos.status = '$status' or contratos.uid_contrato = '$uid_contrato'" );
    $totalcontador = mysql_fetch_assoc($contador);
   
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
        <h3>Consultar Contratos</h3>
        <h6> Contrato <?php echo $page+1; ?> de <?php echo $totalcontador['count']; ?>  </h6>
      
       
      </div>
      

            <!-- INICIO DO FORMULARIO DE CONSULTA -->
<a class="btn btn-outline-warning btn-sm" href="homeusers.php" role="button">Fechar</a>
<?php
if ($page >0){ ?>
<a class="btn btn-outline-warning btn-sm " href="realizaconsulta_contrato.php?page=<?php echo $page-1; ?>" role="button"><< Anterior</a>
<?php
}
if ($page < $totalcontador['count']-1){
?>
<a class="btn btn-outline-warning btn-sm" href="realizaconsulta_contrato.php?page=<?php echo $page+1; ?>" role="button">Próxima >> </a>
<?php
}
?>

<form class="p-1 mb-1 bg-light text-dark">

  
<fieldset disabled>


<form class="p-1 mb-1 bg-light text-dark" method="POST" action="incluircontrato.php">


  <!--Exibe dados da tabela clientes -->




  <div class="form-row">
    <div class="form-group col-md-1">
      <label for="Codigo" class="col-form-label-sm">Cód.</label>
      <input type="text" class="form-control form-control-sm" name="Codigo" value="<?php echo $consulta['Codigo']; ?>">
    </div>
    <div class="form-group col-md-2 bg-warning">
      <label for="codotrs" class="col-form-label-sm">Código Contrato</label>
      <input type="text" class="form-control form-control-sm" name="uid_contrato" value="<?php echo $consulta['uid_contrato']; ?>">
    </div> 
    <div class="form-group col-md-7">
      <label for="RazaoSocial" class="col-form-label-sm">Razão Social</label>
      <input type="text" class="form-control form-control-sm" name="RazaoSocial" value="<?php echo $consulta['RazaoSocial']; ?>">
    </div>
    <div class="form-group col-md-2">
      <label for="CNPJ" class="col-form-label-sm">CNPJ</label>
      <input type="text" class="form-control form-control-sm" name="CNPJ" value="<?php echo $consulta['CNPJ']; ?>">
    </div> 
  </div>

  <div class="form-row">
   <div class="form-group col-md-3">
      <label for="Telefone1" class="col-form-label-sm">Telefone</label>
      <input type="text" class="form-control form-control-sm" name="Telefone1" value="<?php echo $consulta['Telefone1']; ?>">
    </div>     
    <div class="form-group col-md-3">
      <label for="Telefone2" class="col-form-label-sm">Telefone</label>
      <input type="text" class="form-control form-control-sm" name="Telefone2" value="<?php echo $consulta['Telefone2']; ?>">
    </div> 
    <div class="form-group col-md-6">
      <label for="Cidade" class="col-form-label-sm">Cidade</label>
      <input type="text" class="form-control form-control-sm" name="Cidade" value="<?php echo utf8_encode($consulta['Cidade']); ?>">
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
    <textarea class="form-control form-control-sm" name="resumocontrato" rows="3"> <?php echo $consulta['resumocontrato']; ?></textarea>
  </div>

  <div class="form-group">
    <label for="historicocontrato" class="col-form-label-sm">Histórico do contrato</label>
    <textarea class="form-control form-control-sm" name="historicocontrato" rows="5"> <?php echo $consulta['historicocontrato']; ?></textarea>
  </div>

  <!--<div class="form-group">
    <label for="arquivos">Proposta Enviada</label>
    <input type="file" class="form-control-file" name="arquivos">
  </div>-->  

 </fieldset> 

</form>
      
    </main>

    </body>
</html>