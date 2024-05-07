<?php
require('classes.php');
$validador = new Login();
$validador->verificar_logado();

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="box"> <img src="https://upload.wikimedia.org/wikipedia/commons/b/b2/Logo_fatec_araras.png" alt=""><h2 class="textlogin">CADASTRE-SE</h2>
        <form action="cadastro.php" method="POST">
            <div class="form-group">
                <label for="nome">Nome:</label>
                <input type="text" id="nome" name="nome" placeholder="Insira seu nome"required><br><br>
            </div>
            <div class="form-group">
                <label for="curso">Curso (DSM=1 || GE=2):</label>
                <input type="text" id="curso" name="curso" placeholder="Insira o numero do seu curso"required><br><br>
            </div>
            <input class="button" type="submit" value="Entrar">
        </form>
        </div>
    </div>
</body>
</html>

<?php

if(isset($_POST['nome']) && isset($_POST['curso'])) {
    // Inclui o arquivo da classe Cadastro
    include_once 'classes.php';

    // Obtém os dados do formulário
    $nome = $_POST['nome'];
    $curso = $_POST['curso'];

    // Instancia a classe Cadastro e insere os dados no banco de dados
    $cadastro = new Cadastro($nome, $curso);
    echo "Cadastro realizado com sucesso!";
} else {
    echo "Por favor, preencha todos os campos do formulário.";
}
?>

?>