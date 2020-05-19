<html>
<body>
<?php
$con = mssql_connect ("192.168.100.105\SQLEXPRESS", "sa", "SAPWD");
mssql_select_db ("SGEDados1_M&F", $con);
$sql= "SELECT * FROM CliContatos";
$rs= mssql_query ($sql, $con);
echo "<pre>";
while ($row = mssql_fetch_array($rs)) {
print_r ($row);
}
mssql_close ($con);
?>
</body>
</html>
