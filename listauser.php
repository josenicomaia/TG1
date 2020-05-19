<?php
session_start();
$mysqli = include_once("conecta.php");
include_once("security.php");
include ("defaultadmin.php");
$resultado = $mysqli->query("SELECT * FROM usuarios ORDER BY 'uid'");
$linhas = mysqli_num_rows($resultado);
?>

<!doctype html>
<html lang="pt-br">
<head>
 <title>Dashboard - Admin Área</title> 



</head>
<body>

	<main role="main" class="container">

    <div class="starter-template">
      <h3>Lista de Usuários</h3>

    </div>

    <!-- INICIO DA LISTA DE USUARIOS -->


    <div class="col-md-12">


      <table class="table table-hover table-sm">
        <thead class="thead-dark">
          <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Login</th>
            <th>E-mail</th>
            <th>Perfil</th>

          </tr>
        </thead>
        <tbody>
          <?php 
          while($linhas = mysqli_fetch_array($resultado)){
            echo "<tr>";
            echo "<td>".$linhas['uid']."</td>";
            echo "<td>".$linhas['nome']."</td>";
            echo "<td>".$linhas['username']."</td>";
            echo "<td>".$linhas['email']."</td>";
            echo "<td>".$linhas['id_acesso']."</td>";

            echo "</tr>";
          }
          ?>
        </tbody>
      </table>
    </div>





  </main>

</body>
</html>