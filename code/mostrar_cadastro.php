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
    <title>Document</title>
</head>
<body>
    <center>
        <a href="home.php">Voltar</a>
    </center>
</body>
</html>