<?php
session_start();
include_once("conecta.php");
include_once("security.php");
include ("defaulttech.php");

$fecha0 = $_POST['fecha0'];
$fecha1 = $_POST['fecha1'];
$fecha2 = $_POST['fecha2'];
$fecha3 = $_POST['fecha3'];
$fecha4 = $_POST['fecha4'];
$fecha5 = $_POST['fecha5'];
$fecha69 = $_POST['fecha69'];
$fecha10 = $_POST['fecha10'];


$fechames = empty($_POST['fechames'])?$_SESSION['fechames']:$_POST['fechames'];
$_SESSION['fechames'] = $fechames;

$fechaano = empty($_POST['fechaano'])?$_SESSION['fechaano']:$_POST['fechaano'];
$_SESSION['fechaano'] = $fechaano;



$sql = mysql_query("INSERT INTO fechamento(fechaano, fechames, fecha0, fecha1, fecha2, fecha3, fecha4, fecha5, fecha69, fecha10) VALUES ($fechaano, $fechames, $fecha0, $fecha1, $fecha2, $fecha3, $fecha4, $fecha5, $fecha69, $fecha10)");


if (mysql_affected_rows() !=0) {

    ?>
    <div class="alert alert-success" role="alert"> Tempos Cadastrados com Sucesso </div> 

    <?php

    header ("Refresh:1,hometech.php");

}

?> 


<!doctype html>
<html lang="pt-br">
<head>
    <title>Incluir Tempo Fechamento</title> 

</head>
<body>

	
</body>
</html>