<?php
session_start();
$mysqli = include_once("conecta.php");
include_once("security.php");
include ("defaultcom.php");
$Codigo = $_POST['Codigo'];
$RazaoSocial = $_POST['RazaoSocial'];
$CNPJ = $_POST['CNPJ'];
$Cidade = $_POST['Bairro'];
$Telefone1 = $_POST['Telefone1'];
$Telefone2 = $_POST['Telefone2'];
$uid_cliente = $_POST['uid_cliente'];
$_SESSION['uid_cliente'] = $uid_cliente;


    //echo $_SESSION['uid_cliente'];
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
      <h3>Cadastro de Propostas</h3>
    </div>
    
    <!-- INICIO DO FORMULARIO DE CONSULTA -->

    <?php




    
    
    $sql = $mysqli->query("SELECT * FROM clientes WHERE RazaoSocial like '%$RazaoSocial%' LIMIT 1 ");
    $consulta = mysqli_fetch_assoc($sql);


    
    if(($consulta['RazaoSocial']) == ""){

      ?>
      <div class="alert alert-danger" role="alert"> Nenhum cliente encontrado </div> 
      <?php
      header ("Refresh:3,consultaclientes.php");

    }else{

     $_SESSION['uid_cliente']=$consulta['uid_cliente'];
     

     ?>

     <form class="p-1 mb-1 bg-light text-dark" method="POST" action="incluirproposta.php">


      <!--Exibe dados da tabela clientes -->
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
     <div class="form-group col-md-3">
      <label for="numero" class="col-form-label-sm">Número da Proposta</label>
      <input type="text" class="form-control form-control-sm" name="numero" placeholder="Número da Proposta" required>
    </div>     
    <div class="form-group col-md-3">
      <label for="valor" class="col-form-label-sm">Valor R$</label>
      <input type="text" class="form-control form-control-sm" name="valor" placeholder="Valor total" required>
    </div> 
    
    <div class="form-group col-md-3">
      <label for="estagio" class="col-form-label-sm">Tipo de Serviço</label>
      <!--<input type="text" class="form-control form-control-sm" name="estagio" placeholder="Estágio da Proposta">-->
      <select nome="tiposervico" class="form-control" name="tiposervico">
        <option>Selecionar...</option>
        <option value="1">1-Gestão e Suporte</option>
        <option value="2">2-Cloud Backup</option>
        <option value="3">3-Cloud Server</option>
        <option value="4">4-Hosting</option>
        <option value="5">5-Vendas</option>
        <option value="6">6-Outros</option>
      </select>
    </div>  

    <div class="form-group col-md-3">
      <label for="estagio" class="col-form-label-sm">Estágio</label>
      <!--<input type="text" class="form-control form-control-sm" name="estagio" placeholder="Estágio da Proposta">-->
      <select nome="estagio" class="form-control" name="estagio">
        <option>Selecionar...</option>
        <option value="1">1-Enviada</option>
        <option value="2">2-Em Negociacão</option>
        <option value="3">3-Em Fechamento</option>
        <option value="4">4-Fechada</option>
        <option value="5">5-Fechada Sem Resposta</option>
        <option value="6">6-Fechada Perdida</option>
      </select>
    </div>  
  </div>

  <div class="form-row">
   <div class="form-group col-md-6">
    <label for="contato" class="col-form-label-sm">Contato</label>
    <input type="text" class="form-control form-control-sm" name="contato" placeholder="Pessoa de contato" required>
  </div>     
  <div class="form-group col-md-6">
    <label for="email" class="col-form-label-sm">E-mail</label>
    <input type="text" class="form-control form-control-sm" name="email" placeholder="e-mail do contato" required>
  </div>  
</div>

<div class="form-group">
  <label for="resumo">Resumo da Proposta</label>
  <textarea class="form-control form-control-sm" name="resumo" rows="3" required></textarea>
</div>

<div class="form-group">
  <label for="descricao">Histórico</label>
  <textarea class="form-control form-control-sm" name="descricao" rows="5" required></textarea>
</div>

  <!--<div class="form-group">
    <label for="arquivos">Proposta Enviada</label>
    <input type="file" class="form-control-file" name="arquivos">
  </div>-->

  <button type="submit" class="btn btn-outline-success">Cadastrar</button>
  
</form>

<?php
}
?>

</main>

</body>
</html>