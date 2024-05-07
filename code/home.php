<?php
require('classes.php');
$validador = new Login();
$validador->verificar_logado();

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Cadastro do Vestibular</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <style>
        a{
            color: black;
        }
    </style>
</head>
<body>
    <center>
        <h2>Cadastro do Vestibular</h2>
    </center>

    <center>
        <button type="button" class="btn btn-primary">
            <a href="cadastro.php">Cadastrar candidato</a>
        </button> 
    </center>

    <center>
        <button type="button" class="btn btn-primary">
            <a href="mostrar_cadastro.php">Mostrar candidatos</a>
        </button> 
    </center>

    <center>
        <button type="button" class="btn btn-primary">
            <a href="login.php">Sair</a>
        </button> 
    </center> 
</body>
</html>