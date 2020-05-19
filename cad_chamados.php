<?php
session_start();
$mysqli = include_once("conecta.php");
include_once("security.php");
$ajan = $_POST['ajan'];
$fjan = $_POST['fjan'];
$afev = $_POST['afev'];
$ffev = $_POST['ffev'];
$amar = $_POST['amar'];
$fmar = $_POST['fmar'];
$aabr = $_POST['aabr'];
$fabr = $_POST['fabr'];
$amai = $_POST['amai'];
$fmai = $_POST['fmai'];
$ajun = $_POST['ajun'];
$fjun = $_POST['fjun'];
$ajul = $_POST['ajul'];
$fjul = $_POST['fjul'];
$aago = $_POST['aago'];
$fago = $_POST['fago'];
$aset = $_POST['aset'];
$fset = $_POST['fset'];
$aout = $_POST['aout'];
$fout = $_POST['fout'];
$anov = $_POST['anov'];
$fnov = $_POST['fnov'];
$adez = $_POST['adez'];
$fdez = $_POST['fdez'];
$fdez = $_POST['fdez'];
$ano = $_POST['ano'];
$_SESSION['ano'] = $ano;
?>

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

  <nav class="navbar navbar-expand-md navbar-dark bg-secondary fixed-top">
    <a class="navbar-brand" href="#"><img src="img/logomf.png" width="57" height="30" alt=""></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="tech.php">Voltar <span class="sr-only">(current)</span></a>
        </li>
          <!--<li class="nav-item">
            <a class="nav-link" href="#">Link</a>
          </li>
          li class="nav-item">
            <a class="nav-link disabled" href="#">Disabled</a>
          </li>-->
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="http://example.com" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Cadastros</a>
            <div class="dropdown-menu" aria-labelledby="dropdown01">
              <a class="dropdown-item" href="cad_chamados.php">Chamados por Mês</a>
              <a class="dropdown-item" href="#">???</a>
              <a class="dropdown-item" href="#">???</a>
            </div>


          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="http://example.com" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Consultas</a>
            <div class="dropdown-menu" aria-labelledby="dropdown01">
              <a class="dropdown-item" href="grafico1.php">Chamados por Mês</a>
              <a class="dropdown-item" href="#">???</a>
              <a class="dropdown-item" href="#">???</a>
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
            
            if($_SESSION['id_acesso'] <> 3) {
              header ("Location: login.php");
            }
            ?>
          </font>

          <a class="btn btn-outline-dark my-2 my-sm-0" href="encerrar.php" role="button">Sair</a>
        <!--<input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">

          <button class="btn btn-outline-warning my-2 my-sm-0" type="submit"><a href="encerrar.php"> Encerrar </a></button>-->
        </form> 
      </div>
    </nav>

    <main role="main" class="container">

      <div class="starter-template">
        <h3>Cadastro de Chamados</h3>
        <br />


        <!-- INICIO DO FORMULARIO DE CADASTRO -->

        <?php
        

        
        $sql = $mysqli->query("SELECT * FROM chamadospormes WHERE ano='$ano' LIMIT 1");
        $consulta = mysqli_fetch_assoc($sql);

        ?>






        <form class="p-2 mb-2 bg-light text-dark" method="POST" action="incluichamadomes.php">
         

          <div class="form-row">
            <p> Chamados Abertos / Fechados </p>
            <br />
            <br />
          </div>

          <div class="form-row text-primary"> 
            <div class="form-group col-md-1">
              <label for="ajan">Jan</label>
              <input type="text" class="form-control" name="ajan" placeholder="Aberto" value="<?php echo $consulta['ajan']; ?>>
              <input type="text" class="form-control" name="fjan" placeholder="Fech">
            </div>
            <div class="form-group col-md-1">
              <label for="afev">Fev</label>
              <input type="text" class="form-control" name="afev" placeholder="Aberto">
              <input type="text" class="form-control" name="ffev" placeholder="Fech">
            </div>
            <div class="form-group col-md-1">
              <label for="amar">Mar</label>
              <input type="text" class="form-control" name="amar" placeholder="Aberto">
              <input type="text" class="form-control" name="fmar" placeholder="Fech">
            </div>
            <div class="form-group col-md-1">
              <label for="aabr">Abr</label>
              <input type="text" class="form-control" name="aabr" placeholder="Aberto">
              <input type="text" class="form-control" name="fabr" placeholder="Fech">
            </div>
            <div class="form-group col-md-1">
              <label for="amai">Mai</label>
              <input type="text" class="form-control" name="amai" placeholder="Aberto">
              <input type="text" class="form-control" name="fmai" placeholder="Fech">
            </div>
            <div class="form-group col-md-1">
              <label for="ajun">Jun</label>
              <input type="text" class="form-control" name="ajun" placeholder="Aberto">
              <input type="text" class="form-control" name="fjun" placeholder="Fech">
            </div>
            
            <div class="form-group col-md-1">
              <label for="ajul">Jul</label>
              <input type="text" class="form-control" name="ajul" placeholder="Aberto">
              <input type="text" class="form-control" name="fjul" placeholder="Fech">
            </div>

            <div class="form-group col-md-1">
              <label for="aago">Ago</label>
              <input type="text" class="form-control" name="aago" placeholder="Aberto">
              <input type="text" class="form-control" name="fago" placeholder="Fech">
            </div>
            <div class="form-group col-md-1">
              <label for="aset">Set</label>
              <input type="text" class="form-control" name="aset" placeholder="Aberto">
              <input type="text" class="form-control" name="fset" placeholder="Fech">
            </div>
            <div class="form-group col-md-1">
              <label for="aout">Out</label>
              <input type="text" class="form-control" name="aout" placeholder="Aberto">
              <input type="text" class="form-control" name="out" placeholder="Fech">
            </div>
            <div class="form-group col-md-1">
              <label for="anov">Nov.</label>
              <input type="text" class="form-control" name="anov" placeholder="Aberto">
              <input type="text" class="form-control" name="fnov" placeholder="Fech">
            </div>
            <div class="form-group col-md-1">
              <label for="adez">Dez</label>
              <input type="text" class="form-control" name="adez" placeholder="Aberto">
              <input type="text" class="form-control" name="fdez" placeholder="Fech">
            </div>
            

          </div>
          
          <div class="form-group">
            
          </div>
          
          <button type="submit" class="btn btn-outline-primary">Cadastrar</button>

        </form>
      </div>

    </main><!-- /.container -->

    <!-- Bootstrap core JavaScript
      ================================================== -->
      <!-- Placed at the end of the document so the pages load faster -->
      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
      <script>window.jQuery || document.write('<script src="js/jquery-slim.min.js"><\/script>')</script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.min.js"></script>

    </body>

    </html>