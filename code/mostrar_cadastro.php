<?php
require('classes.php');
$validador = new Login();
$validador->verificar_logado();



$instancia = new Cadastro();

// Chamar o método para mostrar cadastros
$cadastros = $instancia->mostrar_cadastros();

// Verificar se há cadastros e exibir
if ($cadastros) {
    foreach ($cadastros as $cadastro) {
        echo "ID: " . $cadastro['id'] . "<br>";
        echo "Nome: " . $cadastro['nome'] . "<br>";
        echo "Curso: " . $cadastro['curso'] . "<br><br>";
        echo "=========" . "<br>";
    }
} else {
    echo "Não há cadastros.";
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CADASTROS</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <style>
        a{
            color: black;
        }
    </style>
</head>
<body>
    <center>
        <button type="button" class="btn btn-primary">
            <a href="home.php">Voltar</a>
        </button> 
    </center>
</body>
</html>