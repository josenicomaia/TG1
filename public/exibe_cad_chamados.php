<?php
    session_start();
    $mysqli = include ("conecta.php");
    include_once("security.php");
    include ("defaulttech.php");

    $ano = $_POST['ano'];
    $_SESSION['ano'] = $ano;

    $sql = $mysqli->query("SELECT * FROM chamadospormes WHERE ano='$ano'");
    $consulta = mysqli_fetch_assoc($sql);
?>
<!doctype html>
<html lang="pt-br">
    <head>
        

    </head>
    <body>
    
	<div class="starter-template">
        <h3>Cadastro de Chamados</h3>
        <br />


         <!-- INICIO DO FORMULARIO DE CADASTRO -->


       <form class="p-2 mb-2 bg-light text-dark" method="POST" action="incluichamadomes.php">
 

  <div class="form-row">
    <p> Chamados Abertos / Fechados </p>
    <br />
    <br />
   </div>



   <div class="form-row text-primary"> 
    <div class="form-group col-md-1">
      <label for="ajan">Jan</label>
      <input type="text" class="form-control" name="ajan" value="<?php echo $consulta['ajan']; ?>">
      <input type="text" class="form-control" name="fjan" value="<?php echo $consulta['fjan']; ?>">
    </div>
    <div class="form-group col-md-1">
      <label for="afev">Fev</label>
      <input type="text" class="form-control" name="afev" value="<?php echo $consulta['afev']; ?>">
      <input type="text" class="form-control" name="ffev" value="<?php echo $consulta['ffev']; ?>">
    </div>
    <div class="form-group col-md-1">
      <label for="amar">Mar</label>
      <input type="text" class="form-control" name="amar" value="<?php echo $consulta['amar']; ?>">
      <input type="text" class="form-control" name="fmar" value="<?php echo $consulta['fmar']; ?>">
    </div>
    <div class="form-group col-md-1">
      <label for="aabr">Abr</label>
      <input type="text" class="form-control" name="aabr" value="<?php echo $consulta['aabr']; ?>">
      <input type="text" class="form-control" name="fabr" value="<?php echo $consulta['fabr']; ?>">
    </div>
    <div class="form-group col-md-1">
      <label for="amai">Mai</label>
      <input type="text" class="form-control" name="amai" value="<?php echo $consulta['amai']; ?>">
      <input type="text" class="form-control" name="fmai" value="<?php echo $consulta['fmai']; ?>">
    </div>
    <div class="form-group col-md-1">
      <label for="ajun">Jun</label>
      <input type="text" class="form-control" name="ajun" value="<?php echo $consulta['ajun']; ?>">
      <input type="text" class="form-control" name="fjun" value="<?php echo $consulta['fjun']; ?>">
    </div>
    
    <div class="form-group col-md-1">
      <label for="ajul">Jul</label>
      <input type="text" class="form-control" name="ajul" value="<?php echo $consulta['ajul']; ?>">
      <input type="text" class="form-control" name="fjul" value="<?php echo $consulta['fjul']; ?>">
    </div>

        <div class="form-group col-md-1">
      <label for="aago">Ago</label>
      <input type="text" class="form-control" name="aago" value="<?php echo $consulta['aago']; ?>">
      <input type="text" class="form-control" name="fago" value="<?php echo $consulta['fago']; ?>">
    </div>
    <div class="form-group col-md-1">
      <label for="aset">Set</label>
      <input type="text" class="form-control" name="aset" value="<?php echo $consulta['aset']; ?>">
      <input type="text" class="form-control" name="fset" value="<?php echo $consulta['fset']; ?>">
    </div>
    <div class="form-group col-md-1">
      <label for="aout">Out</label>
      <input type="text" class="form-control" name="aout" value="<?php echo $consulta['aout']; ?>">
      <input type="text" class="form-control" name="fout" value="<?php echo $consulta['fout']; ?>">
    </div>
    <div class="form-group col-md-1">
      <label for="anov">Nov.</label>
      <input type="text" class="form-control" name="anov" value="<?php echo $consulta['anov']; ?>">
      <input type="text" class="form-control" name="fnov" value="<?php echo $consulta['fnov']; ?>">
    </div>
    <div class="form-group col-md-1">
      <label for="adez">Dez</label>
      <input type="text" class="form-control" name="adez" value="<?php echo $consulta['adez']; ?>">
      <input type="text" class="form-control" name="fdez" value="<?php echo $consulta['fdez']; ?>">
    </div>
    

  </div>
    
  <div class="form-group">
  
  </div>
  
  <button type="submit" class="btn btn-outline-success">Cadastrar</button>

</form>
      </div>





    </body>
</html>
