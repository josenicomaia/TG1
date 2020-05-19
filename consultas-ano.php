<?php
session_start();

include_once("security.php");
include ("defaulttech.php");
?>

<!doctype html>
<html lang="pt-br">
<head>

    <!-- Custom styles for this template -->
    <link href="css/starter-template.css" rel="stylesheet">

</head>
<body>
    <main role="main" class="container">

        <div class="starter-template">
          <h3>Gráfico Chamados Mensais</h3>
      </div>

      <form class="p-1 mb-1 bg-light text-dark" method="POST" action="graf-chamados-ano.php">

          <!-- INPUT para tabela FECHAMENTO -->

          <div class="form-row">
            <div class="form-group col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="ano" class="col-form-label-sm">Ano</label>
              <select nome="ano" class="form-control" name="ano">
                <option >Selecionar...</option>
                <option value="2018">2018</option>
                <option value="2019">2019</option>
                <option value="2020">2020</option>
                <option value="2021">2021</option>
                <option value="2022">2022</option>
                <option value="2023">2023</option>
                <option value="2024">2024</option>
                <option value="2025">2025</option>
            </select>
        </div>
    </div> 
    <button type="submit" class="btn btn-outline-primary  btn-block">Visualizar</button>
</main> 
</form>
</body>
</html>



