<html>
<body>
<?php
// Dados do banco
$dbhost   = "192.168.100.105\SQLEXPRESS";   #Nome do host
$db       = "SGEDados1_M&F";   #Nome do banco de dados
$user     = "sa"; #Nome do usuário
$password = "SAPWD";   #Senha do usuário

// Dados da tabela
$tabela = "ClienteContatos";    #Nome da tabela
$campo1 = "Cliente";  #Nome do campo da tabela
$campo2 = "Email";  #Nome de outro campo da tabela

@mssql_connect($dbhost,$user,$password) or die("Não foi possível a conexão com o servidor!");
@mssql_select_db("$db") or die("Não foi possível selecionar o banco de dados!");
 
$instrucaoSQL = "SELECT $campo1, $campo2 FROM $tabela ORDER BY $campo1";
$consulta = mssql_query($instrucaoSQL);
$numRegistros = mssql_num_rows($consulta);
 
echo "Esta tabela contém $numRegistros registros!\n<hr>\n";
 
if ($numRegistros!=0) {
	while ($cadaLinha = mssql_fetch_array($consulta)) {
		echo "$cadaLinha[$campo1] - $cadaLinha[$campo2]\n<br>\n";
	}
}
?>
</body>
</html>
