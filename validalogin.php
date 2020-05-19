<?php
    session_start();
    $usuariologin = $_POST['usuario'];
    $senhalogin = $_POST['senha'];
    $mysqli = include_once("conecta.php");
    
    // GERAR MD5 DA SENHA ANTES DE VERIFICAR!!!
    $senhalogin = md5($senhalogin);

    $result= $mysqli->query("SELECT * FROM  usuarios WHERE 
    	username ='$usuariologin' AND senha='$senhalogin' LIMIT 1");
    $consultalogin = mysqli_fetch_assoc($result);
    //echo $consultalogin['nome'];
    if (empty($consultalogin)){
//Exibir mensagem de erro
    	$_SESSION ['loginErro'] = "Usuário ou Senha Invalido";
//Retornar para página de login
    	header ("Location: login.php");

    } else {
        $_SESSION['NomeUsuario'] = $consultalogin['nome'];
		$_SESSION['id_acesso'] = $consultalogin['id_acesso'];
        
        // Selecao de nivel de acesso
        if($_SESSION['id_acesso'] == 1){
            header ("Location: homeadmin.php");
        }
        if($_SESSION['id_acesso'] == 2){
            header ("Location: homeusers.php");
        }
        if($_SESSION['id_acesso'] == 3) {
            header ("Location: hometech.php");
        }
        if($_SESSION['id_acesso'] == 4) {
            header ("Location: homecom.php");
        }

        //fim da selecao

    }

//if($_SESSION['id_acesso'] == 1){
//            header ("Location: admin.php");
//        }else {
//            header ("Location: users.php");
//        }


?>