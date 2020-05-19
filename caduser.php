<?php
session_start();
include_once("conecta.php");
include_once("security.php");
include ("defaultadmin.php");
?>

<!doctype html>
<html lang="pt-br">
<head>
 <title>Dashboard - Admin Área</title> 
 
 <!-- Custom styles for this template -->
 <link href="css/starter-template.css" rel="stylesheet">

</head>
<body>

    <main role="main" class="container">
        <div class="starter-template">
            <h3>Cadastro de Usuários</h3>
        </div>
        <!-- INICIO DO FORMULARIO DE CADASTRO -->
        <form class="p-2 mb-2 bg-light text-dark" method="POST" action="incluiruser.php">
            <div class="form-group">
                <label for="nome">Nome</label>
                <input type="text" class="form-control" name="nome" placeholder="Nome Completo" required>
            </div>

            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" name="email" placeholder="Email" required>
                </div>
                
                <div class="form-group col-md-6">
                    <label for="senha">Senha</label>
                    <input type="password" class="form-control" name="senha" placeholder="Senha" required>
                </div>
            </div>
            
            
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="username">Nome de Login</label>
                    <input type="text" class="form-control" name="username" placeholder="login" required>
                </div>
                
                <div class="form-group col-md-4">
                    <label for="id_acesso">Nivel de Acesso</label>
                    <select nome="id_acesso" class="form-control" name="id_acesso">
                        <option >Selecionar...</option>
                        <option value="1">Administrador</option>
                        <option value="2">Financeiro</option>
                        <option value="3">Técnico</option>
                        <option value="4">Comercial</option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                
            </div>
            
            <button type="submit" class="btn btn-outline-success">Cadastrar</button>
        </form>
    </main>
</body>
</html>