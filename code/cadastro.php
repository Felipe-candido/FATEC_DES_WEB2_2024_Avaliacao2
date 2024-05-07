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
        <form action="cadastro.php" method="POST" onsubmit="return validarForm(event)">
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

    <a href="home.php">VOLTAR</a>
</body>
</html>

<script>
        // FUNÇÃO PARA VALIDAR O PREENCHIMENTO E ENVIO DO FORMULÁRIO //
        function validarForm(event){
            var form = document.getElementById('cadastro');
            var nome = document.getElementById('NOME').value.trim();
            var ra = document.getElementById('RA').value.trim();
            var placa = document.getElementById('PLACA').value.trim();
            
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
    // Inclui o arquivo da classe Cadastro
    include_once 'classes.php';

    // Obtém os dados do formulário
    $nome = $_POST['nome'];
    $curso = $_POST['curso'];

    // Instancia a classe Cadastro e insere os dados no banco de dados
    $cadastro = new Cadastro($nome, $curso);
}
?>

