<?php
session_start();
    $mysqli = include ("conecta.php");
    include_once ("security.php");
    include ("defaulttech.php");
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
    $ano = $_SESSION['ano'];

    $consultaano = $mysqli->query("SELECT * FROM chamadospormes where ano = '$ano' ");
    $arrayano = mysqli_fetch_assoc($consultaano);
    $testeano = mysqli_num_rows($consultaano);

    if ($testeano == 0) {

        $incluiano = $mysqli->query("INSERT INTO chamadospormes (ano) VALUES ('$ano') ");

        if (mysqli_affected_rows($mysqli) >0) {

                ?>
                  <div class="alert alert-success" role="alert"> Ano Cadastrado com Sucesso </div> 
                <?php  
              }

    }


    $sql = $mysqli->query("UPDATE chamadospormes SET ajan='$ajan', fjan='$fjan',afev='$afev', ffev='$ffev', amar='$amar', fmar='$fmar',aabr='$aabr',fabr='$fabr', amai='$amai', fmai='$fmai', ajun='$ajun', fjun='$fjun', ajul='$ajul', fjul='$fjul', aago='$aago',fago='$fago', aset='$aset', fset='$fset', aout='$aout', fout='$fout', anov='$anov', fnov='$fnov', adez='$adez', fdez='$fdez'  WHERE ano = '$ano' ");
       

    if (mysqli_affected_rows($mysqli) !=0) {

?>
                  <div class="alert alert-success" role="alert"> Quantidade de Chamados Cadastrados com Sucesso </div> 
                  
              <?php
              
    header ("Refresh:2,hometech.php");

    }else{

	?>
	<div class="alert alert-warning" role="alert"> Nenhuma alteração realizada </div>
<?php

header ("Refresh:2,hometech.php");

}

 ?> 


<!doctype html>
<html lang="pt-br">
    <head>
        <title>Inclui Chamados / mes </title> 

    </head>
    <body>
    
	
    </body>
</html>
