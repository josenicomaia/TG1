<?php
session_start();
    include_once("conecta.php");
    include_once("security.php");
    include ("defaultcom.php");
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
        <h3>Consulta de Clientes</h3>
      </div>
      
      <!-- INICIO DO FORMULARIO DE CONSULTA -->

<?php
  session_start();
  $Codigo = $_POST['Codigo'];
  $RazaoSocial = $_POST['RazaoSocial'];
  $CNPJ = $_POST['CNPJ'];
  $Endereco = $_POST['Endereco'];
  $Cidade = $_POST['Bairro'];
  $Bairro = $_POST['Bairro'];
  $CEP = $_POST['CEP'];
  $InscricaoEstadual = $_POST['InscricaoEstadual'];
  $Telefone1 = $_POST['Telefone1'];
  $Telefone2 = $_POST['Telefone2'];
  $Contato = $_POST['Contato'];
  $Email = $_POST['Email'];
  $Observacao = $_POST['Observacao'];
  $Tipo = $_POST['Tipo'];
  $Descricao = $_POST['Descricao']; 
  $Ativo = $_POST['Ativo'];
  $uid_cliente = $_POST['uid_cliente'];
    
  $sql = mysql_query("SELECT * FROM clientes WHERE RazaoSocial like '%$RazaoSocial%' LIMIT 1 ");
  $consulta = mysql_fetch_assoc($sql);

   
    if(($consulta['RazaoSocial']) == ""){

      ?>
        <div class="alert alert-danger" role="alert"> Nenhum cliente encontrado </div> 
      <?php
      header ("Refresh:3,consultaclientes.php");

    }else{

?>

<form class="p-1 mb-1 bg-light text-dark">
  
  <div class="form-row">
    <div class="form-group col-md-1">
      <label for="Codigo" class="col-form-label-sm">Cód.</label>
      <input type="text" class="form-control form-control-sm" name="Codigo" value="<?php echo $consulta['Codigo']; ?>" readonly>
    </div>
    <div class="form-group col-md-7">
      <label for="RazaoSocial" class="col-form-label-sm">Razão Social</label>
      <input type="text" class="form-control form-control-sm" name="RazaoSocial" value="<?php echo $consulta['RazaoSocial']; ?>" readonly>
    </div>
    <div class="form-group col-md-4">
      <label for="CNPJ" class="col-form-label-sm">CNPJ</label>
      <input type="text" class="form-control form-control-sm" name="CNPJ" value="<?php echo $consulta['CNPJ']; ?>" readonly>
    </div> 
  </div>

  <div class="form-row">
   <div class="form-group col-md-6">
      <label for="Endereco" class="col-form-label-sm">Endereço</label>
      <input type="text" class="form-control form-control-sm" name="Endereco" value="<?php echo $consulta['Endereco']; ?>" readonly>
    </div>    
    <div class="form-group col-md-4">
      <label for="Cidade" class="col-form-label-sm">Cidade</label>
      <input type="text" class="form-control form-control-sm" name="Cidade" value="<?php echo utf8_encode($consulta['Cidade']); ?>" readonly>
    </div>   
    <div class="form-group col-md-2">
      <label for="CEP" class="col-form-label-sm">CEP</label>
      <input type="text" class="form-control form-control-sm" name="CEP" value="<?php echo $consulta['CEP']; ?>" readonly>
    </div>  
  </div>

  <div class="form-row">
   <div class="form-group col-md-4">
      <label for="Bairro" class="col-form-label-sm">Bairro</label>
      <input type="text" class="form-control form-control-sm" name="Bairro" value="<?php echo $consulta['Bairro']; ?>" readonly>
    </div>    
    <div class="form-group col-md-4">
      <label for="InscricaoEstadual" class="col-form-label-sm">Inscricao Estadual</label>
      <input type="text" class="form-control form-control-sm" name="InscricaoEstadual" value="<?php echo $consulta['InscricaoEstadual']; ?>" readonly>
    </div>   
    <div class="form-group col-md-4">
      <label for="Contato" class="col-form-label-sm">Contato</label>
      <input type="text" class="form-control form-control-sm" name="Contato" value="<?php echo $consulta['Contato']; ?>" readonly>
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
      <label for="Email" class="col-form-label-sm">E-mail</label>
      <input type="text" class="form-control form-control-sm" name="Email" value="<?php echo $consulta['Email']; ?>" readonly>
    </div>  
  </div>

  <div class="form-row">
   <div class="form-group col-md-6">
      <label for="Observacao" class="col-form-label-sm">Serviços</label>
      <input type="text" class="form-control form-control-sm" name="Observacao" value="<?php echo $consulta['Observacao']; ?>" readonly>
    </div>    
    <div class="form-group col-md-3">
      <label for="Descricao" class="col-form-label-sm">Modo Atendimento</label>
      <input type="text" class="form-control form-control-sm" name="Descricao" value="<?php echo $consulta['Descricao']; ?>" readonly>
    </div>   
    <div class="form-group col-md-3">
      <label for="Ativo" class="col-form-label-sm">Ativo ?</label>
      <input type="text" class="form-control form-control-sm" name="Ativo" value="<?php echo $consulta['Ativo']; ?>" readonly>
    </div>  
  </div>
<a class="btn btn-outline-warning my-2 my-sm-0" href="homecom.php" role="button">Fechar Consulta</a>
<a class="btn btn-outline-primary my-2 my-sm-0" href="consultaclientes.php" role="button">Nova Consulta</a>
</form>

<?php
}
?>

    </main>
    
    </body>
</html>