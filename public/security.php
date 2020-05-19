<?php
    ob_start();
    if(($_SESSION['NomeUsuario'] == "") || ($_SESSION['id_acesso'] == "")){
		unset ($_SESSION['NomeUsuario'], $_SESSION['id_acesso']);

		// Mensagem de erro
    	$_SESSION ['loginErro'] = "Área Restrita";
		//Retornar para página de login
    	header ("Location: login.php");
    }  
?>