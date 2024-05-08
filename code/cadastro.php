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
    <link rel="stylesheet" href="../css/estilo.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body class="text-center">
    <form id="cadastro" action="cadastro.php" class="form-signin" method="POST" onsubmit="return validarForm(event)">
        <img class="mb-4" src="https://upload.wikimedia.org/wikipedia/commons/b/b2/Logo_fatec_araras.png" alt="logo" width="200" height="100">
        <h1 class="h3 mb-3 font-weight-normal">Cadastre-se</h1>
        <label for="nome" class="sr-only">Nome</label>
        <input type="text" id="nome" name="nome" class="form-control" placeholder="Insira seu nome"required>
        <label for="curso" class="sr-only">Curso (DSM=1 || GE=2)</label>
        <input type="text" id="curso" name="curso" class="form-control" placeholder="Numero do seu curso (DSM=1 || GE=2)"required>
        <input class="btn btn-lg btn-success btn-block" type="submit" value="Entrar">
        <a class="btn btn-lg btn-primary btn-block" href="home.php">Voltar</a>
    </form>
</body>
</html>

<script>
        // FUNÇÃO PARA VALIDAR O PREENCHIMENTO E ENVIO DO FORMULÁRIO //
        function validarForm(event){
            var form = document.getElementById('cadastro');
            var nome = document.getElementById('nome').value.trim();
            var curso = document.getElementById('curso').value.trim();
            
            // VERIFICA SE HÁ ALGUM CAMPO VAZIO // 
            if(nome.trim() === '' || ra.trim() === '' || placa.trim() === ''){
                alert('Por favor, preencha todos os campos.');
                return false; // IMPEDE O ENVIO DO FORM // 
            }
            alert('Cadastro realizado!');
            return true; // PERMITE O ENVIO DO FORM
        }
</script>

<?php

if(isset($_POST['nome']) && isset($_POST['curso'])) {
    include_once 'classes.php';

    // OBTÉM OS DADOS DO FORMULÁRIO
    $nome = $_POST['nome'];
    $curso = $_POST['curso'];

    // INSTANCIA A CLASSE CADASTRO
    $cadastro = new Cadastro($nome, $curso);
    // INSERE O OBJETO NO BANCO DE DADOS
    $cadastro->insert();
    // VOLTA PARA A PÁGINA INICIAL E FECHA A CONEXÃO COM O BANCO
    unset($cadastro);
    header('location: home.php');
}
?>

