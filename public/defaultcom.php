<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>DashBoard M&F</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">


    <!-- Custom styles for this template -->
    <link href="css/starter-template.css" rel="stylesheet">
  </head>

  <body>

    <nav class="navbar navbar-expand-md navbar-dark bg-warning fixed-top">
      <a class="navbar-brand" href="homeadmin.php"><img src="img/logomf.png" width="57" height="30" alt=""></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="homecom.php">Home<span class="sr-only">(current)</span></a>
          </li>
    
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Ações</a>
            <div class="dropdown-menu" aria-labelledby="dropdown01">
              <a class="dropdown-item" href="consultaclientes.php">Clientes - Consultar</a>
              <a class="dropdown-item" href="listacliente.php">Clientes - Listar</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="consulta_cliente_proposta.php">Propostas - Cadastrar</a>
              <a class="dropdown-item" href="consultapropostas.php">Propostas - Consultar</a>
              <a class="dropdown-item" href="consulta_proposta_manutencao.php">Propostas - Manutenção</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="data_listapropostaabertas.php">Listar - Propostas Abertas</a>
              <a class="dropdown-item" href="data_listapropostafechadas.php">Listar - Propostas Fechadas</a>
              <a class="dropdown-item" href="data_listapropostaperdidas.php">Listar - Propostas Perdidas</a>
               <a class="dropdown-item" href="data_listapropostatodas.php">Listar - Todas Propostas</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="data_listapropostagrafico.php">Gráfico - Geral</a>
              <a class="dropdown-item" href="data_listapropostagrafico_aberto.php">Gráfico - Abertas</a>

            </div>


          </li>

        </ul>
         <form class="form-inline my-2 my-lg-0">
            <font color="#FFFFFF">
            <?php
                session_start();
                include_once("security.php");
                $ESPACO="&nbsp";
                echo ("Bem-Vindo: " .$_SESSION['NomeUsuario'] .$ESPACO .$ESPACO);

                
                if(($_SESSION['id_acesso'] == 2) || ($_SESSION['id_acesso'] == 3)){
                header ("Location: login.php");
                 }
            ?>
            </font>

            <a class="btn btn-outline-dark my-2 my-sm-0" href="encerrar.php" role="button">Sair</a>
        
        </form> 
      </div>
    </nav>

    
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="js/jquery-slim.min.js"><\/script>')</script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

  </body>


</html>