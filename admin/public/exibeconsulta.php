<?php
session_start();
    $mysqli = include_once("conecta.php");
    include_once("security.php");
    include ("defaultadmin.php");
?>

<!doctype html>
<html lang="pt-br">
    <head>
       <title>Dashboard - Admin Área</title> 
       
       <!-- Custom styles for this template -->
        <link href="css/starter-template.css" rel="stylesheet">

    </head>
    <body>

<main role="main" class="container">

      <div class="starter-template">
        <h2>Consulta de Usuários</h2>
        <!--<p class="lead">Use this document as a way to quickly start any new project.<br> All you get is this text and a mostly barebones HTML document.</p>-->
       
      </div>
      
      <!-- INICIO DO FORMULARIO DE CONSULTA -->

<?php
    session_start();
    $nome = $_POST['nome'];
    $senha = $_POST['senha'];
    $username = $_POST['username'];
    $id_acesso = $_POST['id_acesso'];
    $email = $_POST['email'];


    
    $sql = $mysqli->query("SELECT * FROM usuarios WHERE email LIKE '%$email%' LIMIT 1");
    $consulta = mysqli_fetch_assoc($sql);

   
if(($consulta['email']) == ""){

      ?>

               
                  <div class="alert alert-danger" role="alert"> Usuário não encontrado </div> 
                  
              <?php

              header ("Refresh:3,consultauser.php");

      }else{

 ?>


<form class="p-2 mb-2 bg-light text-dark">
  <fieldset disabled>
  <div class="form-group">
    <label for="nome">Nome</label>
    <input type="text" class="form-control" name="nome" value="<?php echo $consulta['nome']; ?>">
  </div>

  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="email">Email</label>
      <input type="email" class="form-control" name="email" value="<?php echo $consulta['email']; ?>">
    </div>
    
  </div>
  
  
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="username">Nome de Login</label>
      <input type="text" class="form-control" name="username" value="<?php echo $consulta['username']; ?>">
    </div>
    <div class="form-group col-md-4">
      <label for="id_acesso">Nivel de Acesso</label>
      <!--<input type="text" class="form-control" name="id_acesso" value="<?php echo $consulta['id_acesso']; ?>" readonly>-->
      <select nome="id_acesso" class="form-control" name="id_acesso">
        <option value="1" 
        <?php
            if ($consulta['id_acesso'] == 1) {

              echo 'selected';
            }
        ?> 
            >Administrador</option>
        <option value="2" 
        <?php
            if ($consulta['id_acesso'] == 2) {

              echo 'selected';
            }
        ?> >Financeiro</option>
        <option value="3" 
        <?php
            if ($consulta['id_acesso'] == 3) {

              echo 'selected';
            }
        ?> >Técnico</option>
        <option value="4" 
        <?php
            if ($consulta['id_acesso'] == 4) {

              echo 'selected';
            }
        ?> >Comercial</option>
      </select>

    </div>
   
  </div>
  <div class="form-group">
   
  </div>
</fieldset>
</form>

<?php
}
?>
   

    </main>
    </body>
</html>