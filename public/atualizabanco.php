<?php
session_start();
    $mysqli = include_once("conecta.php");
    include_once("security.php");
    include ("defaultusers.php");
?>

<!doctype html>
<html lang="pt-br">
    <head>
       <title>Dashboard - M&F</title> 

    </head>
    <body>
   <main role="main" class="container"> 
	<div class="starter-template">
       

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



//Campos do MYSQL
$Codigo = "Codigo";
$RazaoSocial = "RazaoSocial";
$CNPJ = "CNPJ";
$Endereco = "Endereco";
$Cidade = "Cidade";
$Bairro = "Bairro";
$CEP = "CEP";
$InscricaoEstadual = "InscricaoEstadual";
$Telefone1 = "Telefone1";
$Telefone2 = "Telefone2";
$Contato = "Contato";
$Email = "Email";
$Observacao = "Observacao";
$Tipo = "Tipo";
$Descricao = "Descricao"; 
$Ativo = "Ativo";
$uid = "uid_cliente";


@mssql_connect($dbhost,$user,$password) or die("Não foi possível a conexão com o servidor!");
@mssql_select_db("$db") or die("Não foi possível selecionar o banco de dados!");


$instrucaoSQL = "SELECT $campo1, $campo2, $campo21, $campo22, $campo23, $campo24, $campo25, $campo26,  $campo3, $campo31, $campo4, $campo5, $campo6, $campo7, $campo8, $campo9  FROM $tabela WHERE  $campo7 in (1,2,3) and $campo9 = 'Sim' ";
$consulta = mssql_query($instrucaoSQL);
$numRegistros = mssql_num_rows($consulta);


if ($numRegistros!=0) {
    while ($Linha = mssql_fetch_array($consulta)) {
        
        
        // Verifica se Registro Existe no Banco MySql
        $existe = "SELECT codigo from clientes where codigo = $Linha[$campo1]";
        $resultadoexiste = $mysqli->query($existe);
        $existelinhas = mysqli_num_rows($resultadoexiste);


        if($existelinhas == 0){ //Se não existe existe (insere o registro no banco mysql)

        	$sql = $mysqli->query("INSERT INTO clientes (Codigo, RazaoSocial, CNPJ, Endereco, Cidade, Bairro, CEP, InscricaoEstatual, Telefone1, Telefone2, Contato, Email, Observacao, Tipo, Descricao, Ativo) VALUES ('$Linha[$campo1]', '$Linha[$campo2]', '$Linha[$campo21]', '$Linha[$campo22]', '$Linha[$campo23]', '$Linha[$campo24]', '$Linha[$campo25]', '$Linha[$campo26]', '$Linha[$campo3]', '$Linha[$campo31]', '$Linha[$campo4]', '$Linha[$campo5]', '$Linha[$campo6]', '$Linha[$campo7]', '$Linha[$campo8]', '$Linha[$campo9]')");

        	if (mysqli_affected_rows($mysqli) !=0) {

				?>
                  <div class="alert alert-success" role="alert"> Registro Criado com Sucesso! </div> 
              	<?php
              	$alterado = 1;
    			header ("Refresh:2,homeusers.php");
    		}

      
       }else{ // Se existir o registro faz atualização do Campo no Banco MySQL


			$sql = $mysqli->query("UPDATE clientes SET Codigo='$Linha[$campo1]', RazaoSocial='$Linha[$campo2]', CNPJ='$Linha[$campo21]', Endereco='$Linha[$campo22]', Cidade='$Linha[$campo23]', Bairro='$Linha[$campo24]', CEP='$Linha[$campo25]', InscricaoEstatual='$Linha[$campo26]', Telefone1='$Linha[$campo3]', Telefone2='$Linha[$campo31]', Contato='$Linha[$campo4]', Email='$Linha[$campo5]', Observacao='$Linha[$campo6]', Tipo='$Linha[$campo7]', Descricao='$Linha[$campo8]', Ativo='$Linha[$campo9]' WHERE Codigo=$Linha[$campo1] ");


        	if (mysqli_affected_rows($mysqli) !=0) {

				?>
                  <div class="alert alert-success" role="alert"> Registro Atualizado com Sucesso! </div>  
              	<?php
              	$alterado = 1;
    			header ("Refresh:2,homeusers.php");
    		}
       }
	}
		if ($alterado <> 1) {
			?>
                <div class="alert alert-warning" role="alert"> Nenhum Registro Atualizado ou Criado. </div> 
             <?php
             echo $alterado;
				header ("Refresh:2,homeusers.php");
		}
}

	

?>
      </div>


</main>


    </body>
</html>