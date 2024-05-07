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
</head>
<body>
    <center>
        <h2>Cadastro do Vestibular</h2>
    </center>

    <center>
        <a href="cadastro.php">Cadastrar candidato</a>
    </center>
    
    <br>
    
    <a href="login.php">Logout</a>
</body>
</html>