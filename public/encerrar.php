<?php
    session_start();
    session_destroy();
    unset ($_SESSION['NomeUsuario'], $_SESSION['id_acesso'], $_SESSION['senha']);

    header ("Location: login.php");
?>
