<?php
session_start();
$mysqli = include_once("conecta.php");
include_once("security.php");
include ("defaulttech.php");



//$ratcodotrs = empty($_POST['ratcodotrs'])?$_SESSION['ratcodotrs']:$_POST['ratcodotrs'];
//$_SESSION['ratcodotrs'] = $ratcodotrs;

$RazaoSocial = empty($_POST['RazaoSocial'])?$_SESSION['RazaoSocial']:$_POST['RazaoSocial'];
$_SESSION['RazaoSocial'] = $RazaoSocial;


//$resultado=mysql_query("SELECT * FROM contratos
//  INNER JOIN clientes ON clientes.uid_cliente = contratos.cliente_uid
//  INNER JOIN rat ON rat.ratcodotrs = contratos.codotrs where clientes.RazaoSocial Like '%$RazaoSocial%' or ratnumero ='$ratnumero' or rattipo = '$rattipo' and date(`ratdata`) between date('$datacriacao') and date('$datacriacaofinal') ORDER BY 'ratnumero' LIMIT 1");

$resultado = $mysqli->query("SELECT * FROM contratos INNER JOIN clientes ON clientes.uid_cliente = contratos.cliente_uid  where clientes.RazaoSocial Like '%$RazaoSocial%' and contratos.tiposervicocontrato = 1");

$consulta = mysqli_fetch_assoc($resultado);


//FUNCIONANDO!!
//$sql = mysql_query("SELECT * FROM rat WHERE ratcodotrs = '$ratcodotrs' LIMIT 1 ");
//$consulta = mysql_fetch_assoc($sql);


if(($consulta['RazaoSocial']) == ""){

  ?>
  <div class="alert alert-danger" role="alert"> Nenhum cliente encontrado </div> 
  <?php
  echo $RazaoSocial;
  header ("Refresh:3,consulta_cliente_rat.php");

}else{

   //$_SESSION['ratcodotrs']=$consulta['ratcodotrs'];

  ?>

  <!doctype html>
  <html lang="pt-br">
  <head>


  </head>
  <body>

   <div class="starter-template">
    <h3>Cadastro de Rats</h3>
    <br />


    <!-- INICIO DO FORMULARIO DE CADASTRO -->


    <form class="p-2 mb-2 bg-light text-dark" method="POST" action="inclui_rat.php">


      <div class="form-row">

      </div>



      <div class="form-row"> 
        <div class="form-group col-md-4">
          <label for="ratcodotrs">Razão Social</label>
          <input type="text" class="form-control" name="ratcodotrs" value="<?php echo $consulta['RazaoSocial']; ?>" readonly> 
        </div>
        <div class="form-group col-md-1">
          <label for="codotrs">OTRS #</label>
          <input type="text" class="form-control" name="ratcodotrs" value="<?php echo $consulta['codotrs']; ?>" readonly> 
        </div>

        <div class="form-group col-md-1">
          <label for="ratnumero">Rat #</label>
          <input type="text" class="form-control" name="ratnumero" placeholder="RAT #">   
        </div>

        <div class="form-group col-md-2">
          <label for="ratdata">Data Atendimento</label>
          <input type="date" class="form-control" name="ratdata" placeholder="Data RAT">
        </div>

        <div class="form-group col-md-1">
          <label for="ratinicio">Hora Início</label>
          <input type="time" class="form-control" name="ratinicio" placeholder="Hora Inicio">  
        </div>

        <div class="form-group col-md-1">
          <label for="ratfim">Hora Fim</label>
          <input type="time" class="form-control" name="ratfim" placeholder="Hora Final">  
        </div>

        <div class="form-group col-md-2">
          <label for="rattipo">Tipo</label>
          <select nome="tiporat" class="form-control" name="rattipo">
            <option value="1">1-Contratual</option>
            <option value="2">2-Adicional</option>
            <option value="3">3-Garantia</option>
          </select>  
        </div>
        
        

      </div>
      
      <div class="form-group">

      </div>
      
      <button type="submit" class="btn btn-outline-primary">Cadastrar</button>
      <a class="btn btn-outline-warning " href="hometech.php" role="button">Fechar</a>

    </form>
  </div>

  <?php
}
?>



</body>
</html>