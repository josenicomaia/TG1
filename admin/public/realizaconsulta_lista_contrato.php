<?php
session_start();
$mysqli = include_once("conecta.php");
include_once("security.php");
include ("defaultusers.php");

    $tiposervicocontrato = empty($_POST['tiposervicocontrato'])?$_SESSION['tiposervicocontrato']:$_POST['tiposervicocontrato'];
    $_SESSION['tiposervicocontrato'] = $tiposervicocontrato;


    if ($tiposervicocontrato == 0) {
$resultado = $mysqli->query("SELECT contratos.*, clientes.RazaoSocial FROM contratos INNER JOIN clientes ON contratos.cliente_uid = clientes.uid_cliente WHERE status=1  ORDER BY RazaoSocial");
$linhas = mysqli_num_rows($resultado);}
           
    else
    {       
            
$resultado = $mysqli->query("SELECT contratos.*, clientes.RazaoSocial FROM contratos INNER JOIN clientes ON contratos.cliente_uid = clientes.uid_cliente WHERE status=1 and tiposervicocontrato=$tiposervicocontrato ORDER BY RazaoSocial");
$linhas = mysqli_num_rows($resultado);

}

?>

<!doctype html>
<html lang="pt-br">
<head>
 <title>Dashboard - Admin Área</title> 



</head>
<body>

	<main role="main" class="container">

    <div class="starter-template">
      <h3>Contratos Cadastrados</h3>

    </div>

    <!-- INICIO DA LISTA DE USUARIOS -->


    <div class="col-md-12">


      <table class="table table-hover table-sm">
        <thead class="thead-dark">
          <tr>
            <th>Cód.</th>
            <th>Razão Social</th>
            <th>Valor Atual R$</th>
            <th>Assinatura</th>
            <th>Tipo de Serviço</th>
            

          </tr>
        </thead>
        <tbody>
          <?php 
          while($linhas = mysqli_fetch_array($resultado)){
           $valortotal = (($valortotal) + ($linhas['valoratual']));
           if ($linhas['tiposervicocontrato'] == 1){
            $tpservico="Gestão e Suporte";
          } 
          if ($linhas['tiposervicocontrato'] == 2){
            $tpservico="Cloud Backup";
          } 
          if ($linhas['tiposervicocontrato'] == 3){
            $tpservico="Cloud Server";
          } 
          if ($linhas['tiposervicocontrato'] == 4){
            $tpservico="Hosting";
          } 
          if ($linhas['tiposervicocontrato'] == 5){
            $tpservico="Vendas";
          } 
          if ($linhas['tiposervicocontrato'] == 6){
            $tpservico="Outros";
          } 

          echo "<tr>";
          echo "<td>".$linhas['uid_contrato']."</td>";
          echo "<td>".$linhas['RazaoSocial']."</td>";
          echo "<td> R$ ".number_format($linhas['valoratual'], 2, ',', '.')."</td>";
          echo "<td>".$linhas['dataassinatura']."</td>";
          echo "<td>".$tpservico."</td>";

        }
        ?>
      </tbody>
    </table>
    <table class="table table-sm">
      <thead class="thead-dark ">
        <tr>

          <td class="table-success text-right"><b> Valor Total: R$ <?php echo number_format($valortotal, 2, ',', '.'); ?></b></td>

       </tr>

     </thead>

   </table>
 </div>
</main>
</body>
</html>





</main>

</body>
</html>