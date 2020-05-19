<html>
<body bgcolor=#FFF8DC>

<?php
// Dados do banco
$dbhost   = "192.168.100.105\SQLEXPRESS";   #Nome do host
$db       = "SGEDados1_M&F";   #Nome do banco de dados
$user     = "sa"; #Nome do usuário
$password = "SAPWD";   #Senha do usuário

// Dados da tabela
$tabela = "ClienteCompleto";
$campo1 = "CodCliente";
$campo2 = "RazaoSocialCliente";
$campo21 = "CGCFilialCliente";
$campo22 = "EnderecoFilialCliente";
$campo23 = "CidadeFilialCliente";
$campo24 = "BairroFilialCliente";
$campo25 = "CEPFilialCliente";
$campo26 = "InscricaoEstadualFilialCliente";
$campo3 = "Telefone1FilialCliente";
$campo31 = "Telefone2FilialCliente";
$campo4 = "ContatoFilialCliente";
$campo5 = "EmailFilialCliente";
$campo6 = "ObservacaoCliente";
$campo7 = "TipoCliente";
$campo8 = "DescricaoTipoCliente"; 
$campo9 = "ClienteAtivo";



@mssql_connect($dbhost,$user,$password) or die("Não foi possível a conexão com o servidor!");
@mssql_select_db("$db") or die("Não foi possível selecionar o banco de dados!");


$instrucaoSQL = "SELECT $campo1, $campo2, $campo21, $campo22, $campo23, $campo24, $campo25, $campo26,  $campo3, $campo31, $campo4, $campo5, $campo6, $campo7, $campo8, $campo9  FROM $tabela WHERE $campo7 =1 or $campo7 =2 and $campo9 = 'Sim' ORDER BY $campo1";
$consulta = mssql_query($instrucaoSQL);
$numRegistros = mssql_num_rows($consulta);

echo "<font size=5 face=Tahoma><b>Relação de Clientes Ativos</b><br></font>";
echo "<font size=1 face=Tahoma>Base de Dados Oficial: Corporator </font><hr><br>";


if ($numRegistros!=0) {
	while ($cadaLinha = mssql_fetch_array($consulta)) {
		#echo "<font size=2 face=Verdana color=#000099> <b>Código:</b> $cadaLinha[$campo1]\n<br>\n </font color>";
		echo "<font size=2 face=Verdana color=#000099><b>Razão Social:</b> $cadaLinha[$campo1] -  $cadaLinha[$campo2]\n<br><br>\n</font color>";
		echo "<font size=2 face=Verdana><b>CNPJ</b> $cadaLinha[$campo21]<b> - IE: </b> $cadaLinha[$campo26]\n<br>\n</font>";
		echo "<font size=2 face=Verdana><b>Endereço:</b> $cadaLinha[$campo22]\n<br>\n</font>";
		echo "<font size=2 face=Verdana><b>Cidade:</b> $cadaLinha[$campo23] <b>- Bairro:</b> $cadaLinha[$campo24]<b> - CEP:</b> $cadalinha[$campo25]\n<br>\n</font>";
		echo "<font size=2 face=Verdana><b>Telefones:</b> $cadaLinha[$campo3] - $cadaLinha[$campo31] \n<br>\n</font>";
		echo "<font size=2 face=Verdana><b>Responsável:</b> $cadaLinha[$campo4]\n<br>\n</font>";
		echo "<font size=2 face=Verdana><b>E-mail:</b> $cadaLinha[$campo5]\n<br><br>\n</font>";
		echo "<font size=2 face=Verdana><b>Serviço:</b> $cadaLinha[$campo6]\n<br>\n</font>";
		echo "<font size=2 face=Verdana><b>Tipo:</b> $cadaLinha[$campo7] - $cadaLinha[$campo8]\n<hr>\n</font>";
		echo " \n<br>\n";

}

$ip =$_SERVER['REMOTE_ADDR'];
$data = date("D - d M Y - H:i:s");
echo "<font size=1 face=Verdana> Esta Consulta Retornou $numRegistros registros!\n </font><br>";
echo "<font size=1 face=Verdana> Consulta realizada em: $data - IP: $ip </font>" ;

}
?>
</body>
</html>
