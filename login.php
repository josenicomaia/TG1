<?php
session_start();
?>
<!doctype html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" href="../../../../favicon.ico">

  <title>Dashboard Login</title>

  <!-- Bootstrap core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/signin.css" rel="stylesheet">
</head>

<body>
 <?php 
 unset ($_SESSION['NomeUsuario'], $_SESSION['id_acesso']);
 ?>
 <div class="container text-center">
  <form class="form-signin" method="POST" action="validalogin.php">
    <img class="mb-4" src="img/logomf.png" alt="" width="190" height="100">
    <h1 class="h3 mb-3 font-weight-normal">Login</h1>

    <label for="inputEmail" class="sr-only">Usuário</label>
    <input type="text" name="usuario" class="form-control" placeholder="Digite o Usuário" required autofocus>

    <label for="inputPassword" class="sr-only">Senha</label>
    <input type="password" name="senha" class="form-control" placeholder="Digite a Senha" required>

    <button class="btn btn-lg btn-primary btn-block" type="submit">Entrar</button>
  </form>

  <?php
  if (isset($_SESSION ['loginErro'])){

    $MSG=$_SESSION ['loginErro']; 
    ?>
    <div class="alert alert-danger" role="alert"> <?php echo $MSG; ?> </div> 

    <?php
    unset ($_SESSION ['loginErro']);
  }
  ?>

  <p class="mt-5 mb-3 text-muted">&copy; 2018 - M&F Soluções Ltda.</p> 
</div>
</body>
</html>


