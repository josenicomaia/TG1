<?php
session_start();
    include_once("conecta.php");
    //include_once("security.php");
    include ("defaultusers.php");

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

    
    
    $sql = mysql_query("SELECT * FROM chamadospormes WHERE ano='$ano'");
    $consulta = mysql_fetch_assoc($sql);


    
?>

<!doctype html>
<html lang="pt-br">
    <head>
        

    </head>
    <body>
    
	<div class="starter-template">
        <h1>Cadastro de Despesas Operacionais</h1>
        <br />


         <!-- INICIO DO FORMULARIO DE CADASTRO -->


       <form class="p-2 mb-2 bg-light text-dark" method="POST" action="incluichamadomes.php">
 

  <div class="form-row">
    <p> Despesas - RH </p>
    <br />
   </div>



   <div class="form-row text-primary"> 
    <div class="form-group col-md-1">
      <label for="ajan">Salários</label>
      <input type="text" class="form-control form-control-sm" name="ajan" value="<?php echo $consulta['ajan']; ?>" placeholder="Prev">
      <input type="text" class="form-control form-control-sm" name="fjan" value="<?php echo $consulta['fjan']; ?>" placeholder="Real">
    </div>
    <div class="form-group col-md-1">
      <label for="afev">INSS</label>
      <input type="text" class="form-control form-control-sm" name="afev" value="<?php echo $consulta['afev']; ?>" placeholder="Prev">
      <input type="text" class="form-control form-control-sm" name="ffev" value="<?php echo $consulta['ffev']; ?>" placeholder="Real">
    </div>
    <div class="form-group col-md-1">
      <label for="amar">FGTS</label>
      <input type="text" class="form-control form-control-sm" name="amar" value="<?php echo $consulta['amar']; ?>" placeholder="Prev">
      <input type="text" class="form-control form-control-sm" name="fmar" value="<?php echo $consulta['fmar']; ?>" placeholder="Real">
    </div>
    <div class="form-group col-md-1">
      <label for="aabr">Férias</label>
      <input type="text" class="form-control form-control-sm" name="aabr" value="<?php echo $consulta['aabr']; ?>" placeholder="Prev">
      <input type="text" class="form-control form-control-sm" name="fabr" value="<?php echo $consulta['fabr']; ?>" placeholder="Real">
    </div>
    <div class="form-group col-md-1">
      <label for="amai">Mai</label>
      <input type="text" class="form-control form-control-sm" name="amai" value="<?php echo $consulta['amai']; ?>" placeholder="Prev">
      <input type="text" class="form-control form-control-sm" name="fmai" value="<?php echo $consulta['fmai']; ?>" placeholder="Real">
    </div>
    <div class="form-group col-md-1">
      <label for="ajun">Jun</label>
      <input type="text" class="form-control form-control-sm" name="ajun" value="<?php echo $consulta['ajun']; ?>" placeholder="Prev">
      <input type="text" class="form-control form-control-sm" name="fjun" value="<?php echo $consulta['fjun']; ?>" placeholder="Real">
    </div>
    
    <div class="form-group col-md-1">
      <label for="ajul">Jul</label>
      <input type="text" class="form-control form-control-sm" name="ajul" value="<?php echo $consulta['ajul']; ?>" placeholder="Prev">
      <input type="text" class="form-control form-control-sm" name="fjul" value="<?php echo $consulta['fjul']; ?>" placeholder="Real">
    </div>

        <div class="form-group col-md-1">
      <label for="aago">Ago</label>
      <input type="text" class="form-control form-control-sm" name="aago" value="<?php echo $consulta['aago']; ?>" placeholder="Prev">
      <input type="text" class="form-control form-control-sm" name="fago" value="<?php echo $consulta['fago']; ?>" placeholder="Real">
    </div>
    <div class="form-group col-md-1">
      <label for="aset">Set</label>
      <input type="text" class="form-control form-control-sm" name="aset" value="<?php echo $consulta['aset']; ?>" placeholder="Prev">
      <input type="text" class="form-control form-control-sm" name="fset" value="<?php echo $consulta['fset']; ?>" placeholder="Real">
    </div>
    <div class="form-group col-md-1">
      <label for="aout">Out</label>
      <input type="text" class="form-control form-control-sm" name="aout" value="<?php echo $consulta['aout']; ?>" placeholder="Prev">
      <input type="text" class="form-control form-control-sm" name="fout" value="<?php echo $consulta['fout']; ?>" placeholder="Real">
    </div>
    <div class="form-group col-md-1">
      <label for="anov">Nov.</label>
      <input type="text" class="form-control form-control-sm" name="anov" value="<?php echo $consulta['anov']; ?>" placeholder="Prev">
      <input type="text" class="form-control form-control-sm" name="fnov" value="<?php echo $consulta['fnov']; ?>" placeholder="Real">
    </div>
    <div class="form-group col-md-1">
      <label for="adez">Dez</label>
      <input type="text" class="form-control form-control-sm" name="adez" value="<?php echo $consulta['adez']; ?>" placeholder="Prev">
      <input type="text" class="form-control form-control-sm" name="fdez" value="<?php echo $consulta['fdez']; ?>" placeholder="Real">
    </div>
    

  </div>
 
  <div class="form-row">
    <p> Despesas Operacionais </p>
   </div>



   <div class="form-row text-primary"> 
    <div class="form-group col-md-1">
      <label for="ajan">Energia</label>
      <input type="text" class="form-control form-control-sm" name="ajan" value="<?php echo $consulta['ajan']; ?>" placeholder="Prev">
      <input type="text" class="form-control form-control-sm" name="fjan" value="<?php echo $consulta['fjan']; ?>" placeholder="Real">
    </div>
    <div class="form-group col-md-1">
      <label for="afev">Aluguel</label>
      <input type="text" class="form-control form-control-sm" name="afev" value="<?php echo $consulta['afev']; ?>" placeholder="Prev">
      <input type="text" class="form-control form-control-sm" name="ffev" value="<?php echo $consulta['ffev']; ?>" placeholder="Real">
    </div>
    <div class="form-group col-md-1">
      <label for="amar">Internet</label>
      <input type="text" class="form-control form-control-sm" name="amar" value="<?php echo $consulta['amar']; ?>" placeholder="Prev">
      <input type="text" class="form-control form-control-sm" name="fmar" value="<?php echo $consulta['fmar']; ?>" placeholder="Real">
    </div>
    <div class="form-group col-md-1">
      <label for="aabr">Telefone</label>
      <input type="text" class="form-control form-control-sm" name="aabr" value="<?php echo $consulta['aabr']; ?>" placeholder="Prev">
      <input type="text" class="form-control form-control-sm" name="fabr" value="<?php echo $consulta['fabr']; ?>" placeholder="Real">
    </div>
    <div class="form-group col-md-1">
      <label for="amai">Impostos</label>
      <input type="text" class="form-control form-control-sm" name="amai" value="<?php echo $consulta['amai']; ?>" placeholder="Prev">
      <input type="text" class="form-control form-control-sm" name="fmai" value="<?php echo $consulta['fmai']; ?>" placeholder="Real">
    </div>
    <div class="form-group col-md-1">
      <label for="ajun">Jun</label>
      <input type="text" class="form-control form-control-sm" name="ajun" value="<?php echo $consulta['ajun']; ?>" placeholder="Prev">
      <input type="text" class="form-control form-control-sm" name="fjun" value="<?php echo $consulta['fjun']; ?>" placeholder="Real">
    </div>
    
    <div class="form-group col-md-1">
      <label for="ajul">Jul</label>
      <input type="text" class="form-control form-control-sm" name="ajul" value="<?php echo $consulta['ajul']; ?>" placeholder="Prev">
      <input type="text" class="form-control form-control-sm" name="fjul" value="<?php echo $consulta['fjul']; ?>" placeholder="Real">
    </div>

        <div class="form-group col-md-1">
      <label for="aago">Ago</label>
      <input type="text" class="form-control form-control-sm" name="aago" value="<?php echo $consulta['aago']; ?>" placeholder="Prev">
      <input type="text" class="form-control form-control-sm" name="fago" value="<?php echo $consulta['fago']; ?>" placeholder="Real">
    </div>
    <div class="form-group col-md-1">
      <label for="aset">Set</label>
      <input type="text" class="form-control form-control-sm" name="aset" value="<?php echo $consulta['aset']; ?>" placeholder="Prev">
      <input type="text" class="form-control form-control-sm" name="fset" value="<?php echo $consulta['fset']; ?>" placeholder="Real">
    </div>
    <div class="form-group col-md-1">
      <label for="aout">Out</label>
      <input type="text" class="form-control form-control-sm" name="aout" value="<?php echo $consulta['aout']; ?>" placeholder="Prev">
      <input type="text" class="form-control form-control-sm" name="fout" value="<?php echo $consulta['fout']; ?>" placeholder="Real">
    </div>
    <div class="form-group col-md-1">
      <label for="anov">Nov.</label>
      <input type="text" class="form-control form-control-sm" name="anov" value="<?php echo $consulta['anov']; ?>" placeholder="Prev">
      <input type="text" class="form-control form-control-sm" name="fnov" value="<?php echo $consulta['fnov']; ?>" placeholder="Real">
    </div>
    <div class="form-group col-md-1">
      <label for="adez">Dez</label>
      <input type="text" class="form-control form-control-sm" name="adez" value="<?php echo $consulta['adez']; ?>" placeholder="Prev">
      <input type="text" class="form-control form-control-sm" name="fdez" value="<?php echo $consulta['fdez']; ?>" placeholder="Real">
    </div>
    

  </div>

  <div class="form-row">
    <p> Impostos </p>
   </div>



   <div class="form-row text-primary"> 
    <div class="form-group col-md-1">
      <label for="ajan">Energia</label>
      <input type="text" class="form-control form-control-sm" name="ajan" value="<?php echo $consulta['ajan']; ?>" placeholder="Prev">
      <input type="text" class="form-control form-control-sm" name="fjan" value="<?php echo $consulta['fjan']; ?>" placeholder="Real">
    </div>
    <div class="form-group col-md-1">
      <label for="afev">Aluguel</label>
      <input type="text" class="form-control form-control-sm" name="afev" value="<?php echo $consulta['afev']; ?>" placeholder="Prev">
      <input type="text" class="form-control form-control-sm" name="ffev" value="<?php echo $consulta['ffev']; ?>" placeholder="Real">
    </div>
    <div class="form-group col-md-1">
      <label for="amar">Internet</label>
      <input type="text" class="form-control form-control-sm" name="amar" value="<?php echo $consulta['amar']; ?>" placeholder="Prev">
      <input type="text" class="form-control form-control-sm" name="fmar" value="<?php echo $consulta['fmar']; ?>" placeholder="Real">
    </div>
    <div class="form-group col-md-1">
      <label for="aabr">Telefone</label>
      <input type="text" class="form-control form-control-sm" name="aabr" value="<?php echo $consulta['aabr']; ?>" placeholder="Prev">
      <input type="text" class="form-control form-control-sm" name="fabr" value="<?php echo $consulta['fabr']; ?>" placeholder="Real">
    </div>
    <div class="form-group col-md-1">
      <label for="amai">Impostos</label>
      <input type="text" class="form-control form-control-sm" name="amai" value="<?php echo $consulta['amai']; ?>" placeholder="Prev">
      <input type="text" class="form-control form-control-sm" name="fmai" value="<?php echo $consulta['fmai']; ?>" placeholder="Real">
    </div>
    <div class="form-group col-md-1">
      <label for="ajun">Jun</label>
      <input type="text" class="form-control form-control-sm" name="ajun" value="<?php echo $consulta['ajun']; ?>" placeholder="Prev">
      <input type="text" class="form-control form-control-sm" name="fjun" value="<?php echo $consulta['fjun']; ?>" placeholder="Real">
    </div>
    
    <div class="form-group col-md-1">
      <label for="ajul">Jul</label>
      <input type="text" class="form-control form-control-sm" name="ajul" value="<?php echo $consulta['ajul']; ?>" placeholder="Prev">
      <input type="text" class="form-control form-control-sm" name="fjul" value="<?php echo $consulta['fjul']; ?>" placeholder="Real">
    </div>

        <div class="form-group col-md-1">
      <label for="aago">Ago</label>
      <input type="text" class="form-control form-control-sm" name="aago" value="<?php echo $consulta['aago']; ?>" placeholder="Prev">
      <input type="text" class="form-control form-control-sm" name="fago" value="<?php echo $consulta['fago']; ?>" placeholder="Real">
    </div>
    <div class="form-group col-md-1">
      <label for="aset">Set</label>
      <input type="text" class="form-control form-control-sm" name="aset" value="<?php echo $consulta['aset']; ?>" placeholder="Prev">
      <input type="text" class="form-control form-control-sm" name="fset" value="<?php echo $consulta['fset']; ?>" placeholder="Real">
    </div>
    <div class="form-group col-md-1">
      <label for="aout">Out</label>
      <input type="text" class="form-control form-control-sm" name="aout" value="<?php echo $consulta['aout']; ?>" placeholder="Prev">
      <input type="text" class="form-control form-control-sm" name="fout" value="<?php echo $consulta['fout']; ?>" placeholder="Real">
    </div>
    <div class="form-group col-md-1">
      <label for="anov">Nov.</label>
      <input type="text" class="form-control form-control-sm" name="anov" value="<?php echo $consulta['anov']; ?>" placeholder="Prev">
      <input type="text" class="form-control form-control-sm" name="fnov" value="<?php echo $consulta['fnov']; ?>" placeholder="Real">
    </div>
    <div class="form-group col-md-1">
      <label for="adez">Dez</label>
      <input type="text" class="form-control form-control-sm" name="adez" value="<?php echo $consulta['adez']; ?>" placeholder="Prev">
      <input type="text" class="form-control form-control-sm" name="fdez" value="<?php echo $consulta['fdez']; ?>" placeholder="Real">
    </div>
    

  </div>


    <div class="form-row">
    <p> Fornecedores </p>
   </div>



   <div class="form-row text-primary"> 
    <div class="form-group col-md-1">
      <label for="ajan">Energia</label>
      <input type="text" class="form-control form-control-sm" name="ajan" value="<?php echo $consulta['ajan']; ?>" placeholder="Prev">
      <input type="text" class="form-control form-control-sm" name="fjan" value="<?php echo $consulta['fjan']; ?>" placeholder="Real">
    </div>
    <div class="form-group col-md-1">
      <label for="afev">Aluguel</label>
      <input type="text" class="form-control form-control-sm" name="afev" value="<?php echo $consulta['afev']; ?>" placeholder="Prev">
      <input type="text" class="form-control form-control-sm" name="ffev" value="<?php echo $consulta['ffev']; ?>" placeholder="Real">
    </div>
    <div class="form-group col-md-1">
      <label for="amar">Internet</label>
      <input type="text" class="form-control form-control-sm" name="amar" value="<?php echo $consulta['amar']; ?>" placeholder="Prev">
      <input type="text" class="form-control form-control-sm" name="fmar" value="<?php echo $consulta['fmar']; ?>" placeholder="Real">
    </div>
    <div class="form-group col-md-1">
      <label for="aabr">Telefone</label>
      <input type="text" class="form-control form-control-sm" name="aabr" value="<?php echo $consulta['aabr']; ?>" placeholder="Prev">
      <input type="text" class="form-control form-control-sm" name="fabr" value="<?php echo $consulta['fabr']; ?>" placeholder="Real">
    </div>
    <div class="form-group col-md-1">
      <label for="amai">Impostos</label>
      <input type="text" class="form-control form-control-sm" name="amai" value="<?php echo $consulta['amai']; ?>" placeholder="Prev">
      <input type="text" class="form-control form-control-sm" name="fmai" value="<?php echo $consulta['fmai']; ?>" placeholder="Real">
    </div>
    <div class="form-group col-md-1">
      <label for="ajun">Jun</label>
      <input type="text" class="form-control form-control-sm" name="ajun" value="<?php echo $consulta['ajun']; ?>" placeholder="Prev">
      <input type="text" class="form-control form-control-sm" name="fjun" value="<?php echo $consulta['fjun']; ?>" placeholder="Real">
    </div>
    
    <div class="form-group col-md-1">
      <label for="ajul">Jul</label>
      <input type="text" class="form-control form-control-sm" name="ajul" value="<?php echo $consulta['ajul']; ?>" placeholder="Prev">
      <input type="text" class="form-control form-control-sm" name="fjul" value="<?php echo $consulta['fjul']; ?>" placeholder="Real">
    </div>

        <div class="form-group col-md-1">
      <label for="aago">Ago</label>
      <input type="text" class="form-control form-control-sm" name="aago" value="<?php echo $consulta['aago']; ?>" placeholder="Prev">
      <input type="text" class="form-control form-control-sm" name="fago" value="<?php echo $consulta['fago']; ?>" placeholder="Real">
    </div>
    <div class="form-group col-md-1">
      <label for="aset">Set</label>
      <input type="text" class="form-control form-control-sm" name="aset" value="<?php echo $consulta['aset']; ?>" placeholder="Prev">
      <input type="text" class="form-control form-control-sm" name="fset" value="<?php echo $consulta['fset']; ?>" placeholder="Real">
    </div>
    <div class="form-group col-md-1">
      <label for="aout">Out</label>
      <input type="text" class="form-control form-control-sm" name="aout" value="<?php echo $consulta['aout']; ?>" placeholder="Prev">
      <input type="text" class="form-control form-control-sm" name="fout" value="<?php echo $consulta['fout']; ?>" placeholder="Real">
    </div>
    <div class="form-group col-md-1">
      <label for="anov">Nov.</label>
      <input type="text" class="form-control form-control-sm" name="anov" value="<?php echo $consulta['anov']; ?>" placeholder="Prev">
      <input type="text" class="form-control form-control-sm" name="fnov" value="<?php echo $consulta['fnov']; ?>" placeholder="Real">
    </div>
    <div class="form-group col-md-1">
      <label for="adez">Dez</label>
      <input type="text" class="form-control form-control-sm" name="adez" value="<?php echo $consulta['adez']; ?>" placeholder="Prev">
      <input type="text" class="form-control form-control-sm" name="fdez" value="<?php echo $consulta['fdez']; ?>" placeholder="Real">
    </div>
    

  </div>
    
  <div class="form-group">
  
  </div>
  
  <button type="submit" class="btn btn-outline-success">Cadastrar</button>

</form>
      </div>





    </body>
</html>