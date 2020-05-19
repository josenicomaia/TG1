<?php

$conecta = mysqli_connect("laradock_mysql_1","root", "root") or die ("Erro de conexão com o Banco");
mysqli_select_db($conecta, "dashbd") or die ("Base de Dados Não Localizada");

return $conecta;