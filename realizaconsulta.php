<?php
session_start();
$mysqli = include_once("conecta.php");
include_once("security.php");
include("defaultcom.php");




$RazaoSocial = empty($_POST['RazaoSocial'])?$_SESSION['RazaoSocial']:$_POST['RazaoSocial'];
$_SESSION['RazaoSocial'] = $RazaoSocial;

$codigo = empty($_POST['codigo'])?$_SESSION['codigo']:$_POST['codigo'];
$_SESSION['codigo'] = $codigo;

$CNPJ = empty($_POST['CNPJ'])?$_SESSION['CNPJ']:$_POST['CNPJ'];
$_SESSION['CNPJ'] = $CNPJ;

$numero = empty($_POST['numero'])?$_SESSION['numero']:$_POST['numero'];
$_SESSION['numero'] = $numero;

$estagio = empty($_POST['estagio'])?$_SESSION['estagio']:$_POST['estagio'];
$_SESSION['estagio'] = $estagio;

$tiposervico = empty($_POST['tiposervico'])?$_SESSION['tiposervico']:$_POST['tiposervico'];
$_SESSION['tiposervico'] = $tiposervico;

$datacriacao = empty($_POST['datacriacao'])?$_SESSION['datacriacao']:$_POST['datacriacao'];
$_SESSION['datacriacao'] = $datacriacao;

$page = empty($_REQUEST['page'])?0:$_REQUEST['page'];


    // consulta das tabelas clientes e propostas



$resultado = $mysqli->query("SELECT propostas.*, clientes.* FROM propostas INNER JOIN clientes ON propostas.cliente_uid = clientes.uid_cliente where clientes.Codigo like  '$codigo'  or clientes.RazaoSocial like '$RazaoSocial' or clientes.CNPJ like '$CNPJ' or propostas.numero like  '$numero' or propostas.estagio = '$estagio' or propostas.tiposervico = '$tiposervico' or propostas.datacriacao like '$datacriacao' LIMIT $page,1" );
$linhas = mysqli_num_rows($resultado);
$consulta = mysqli_fetch_assoc($resultado);

$contador = $mysqli->query("SELECT COUNT(*) as count FROM propostas INNER JOIN clientes ON propostas.cliente_uid = clientes.uid_cliente where clientes.Codigo like  '$codigo'  or clientes.RazaoSocial like '$RazaoSocial' or clientes.CNPJ like '$CNPJ' or propostas.numero like  '$numero' or propostas.estagio = '$estagio' or propostas.tiposervico = '$tiposervico' or propostas.datacriacao like '$datacriacao'" );
$totalcontador = mysqli_fetch_assoc($contador);



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
      <h6> Proposta <?php echo $page+1; ?> de <?php echo $totalcontador['count']; ?>  </h6>
      
      
    </div>
    

    <!-- INICIO DO FORMULARIO DE CONSULTA -->
    <a class="btn btn-outline-warning btn-sm" href="homecom.php" role="button">Fechar</a>
    <?php
    if ($page >0){ ?>
      <a class="btn btn-outline-warning btn-sm " href="realizaconsulta.php?page=<?php echo $page-1; ?>" role="button"><< Anterior</a>
      <?php
    }
    if ($page < $totalcontador['count']-1){
      ?>
      <a class="btn btn-outline-warning btn-sm" href="realizaconsulta.php?page=<?php echo $page+1; ?>" role="button">Próxima >> </a>
      <?php
    }
    ?>

    <form class="p-1 mb-1 bg-light text-dark" method="POST" action="realizaconsulta.php">

      
      <fieldset disabled>

        <div class="form-row">
          <div class="form-group col-md-1">
            <label for="Codigo" class="col-form-label-sm">Cód.</label>
            <input type="text" class="form-control form-control-sm" name="Codigo" value="<?php echo $consulta['Codigo']; ?>" >
          </div>
          <div class="form-group col-md-7">
            <label for="RazaoSocial" class="col-form-label-sm">Razão Social</label>
            <input type="text" class="form-control form-control-sm" name="RazaoSocial" value="<?php echo $consulta['RazaoSocial']; ?>" >
          </div>
          <div class="form-group col-md-4">
            <label for="CNPJ" class="col-form-label-sm">CNPJ</label>
            <input type="text" class="form-control form-control-sm" name="CNPJ" value="<?php echo $consulta['CNPJ']; ?>" >
          </div> 
        </div>

 <!-- <div class="form-row">
   <div class="form-group col-md-3">
      <label for="Telefone1" class="col-form-label-sm">Telefone</label>
      <input type="text" class="form-control form-control-sm" name="Telefone1" value="<?php //echo $consulta['Telefone1']; ?>">
    </div>     
    <div class="form-group col-md-3">
      <label for="Telefone2" class="col-form-label-sm">Telefone</label>
      <input type="text" class="form-control form-control-sm" name="Telefone2" value="<?php //echo $consulta['Telefone2']; ?>">
    </div> 
    <div class="form-group col-md-6">
      <label for="Cidade" class="col-form-label-sm">Cidade</label>
      <input type="text" class="form-control form-control-sm" name="Cidade" value="<?php //echo utf8_encode($consulta['Cidade']); ?>">
    </div>  
  </div>-->

  <div class="form-row">
   <div class="form-group col-md-3">
    <label for="numero" class="col-form-label-sm">Número da Proposta</label>
    <input type="text" class="form-control form-control-sm" name="numero" value="<?php echo $consulta['numero']; ?>">
  </div>     
  <div class="form-group col-md-3">
    <label for="valor" class="col-form-label-sm">Valor R$</label>  
    <input type="text" class="form-control form-control-sm" name="valor" value="<?php echo $consulta['valor']; ?>">
  </div> 
  
  <div class="form-group col-md-3">
    <label for="estagio" class="col-form-label-sm">Tipo de Serviço</label>
    
    <select nome="tiposervico" class="form-control" name="tiposervico">
      
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
    <label for="estagio" class="col-form-label-sm">Estágio</label>
    
    <select nome="estagio" class="form-control" name="estagio">
      
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

<div class="form-row">
  <div class="form-group col-md-3">
    <label for="contato" class="col-form-label-sm">Contato</label>
    <input type="text" class="form-control form-control-sm" name="contato" value="<?php echo $consulta['contato']; ?>">
  </div>     
  <div class="form-group col-md-3">
    <label for="email" class="col-form-label-sm">E-mail</label>
    <input type="text" class="form-control form-control-sm" name="email" value="<?php echo $consulta['email']; ?>">
  </div>
  
  <div class="form-group col-md-3">
    <label for="datacriacao" class="col-form-label-sm">Criação</label>
    <input type="text" class="form-control form-control-sm" name="datacriacao" value="<?php echo $consulta['datacriacao']; ?>">
  </div>     
  <div class="form-group col-md-3">
    <label for="datamodificacao" class="col-form-label-sm">Modificação</label>
    <input type="text" class="form-control form-control-sm" name="datamodificacao" value="<?php echo $consulta['datamodificacao']; ?>">
  </div>  
  
</div>

<div class="form-group">
  <label for="resumo">Resumo da Proposta</label>
  <textarea class="form-control form-control-sm" name="resumo" rows="3"> <?php echo $consulta['resumo']; ?> </textarea>
</div>

<div class="form-group">
  <label for="descricao">Histórico</label>
  <textarea class="form-control form-control-sm" name="descricao" rows="5">  <?php echo $consulta['descricao']; ?> </textarea>
</div>

  <!--<div class="form-group">
    <label for="arquivos">Proposta Enviada</label>
    <input type="file" class="form-control-file" name="arquivos"  readonly>
  </div>-->

</div>

</fieldset> 

</form>

</main>

</body>
</html>