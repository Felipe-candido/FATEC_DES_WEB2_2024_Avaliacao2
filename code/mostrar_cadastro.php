<?php
require('classes.php');
$validador = new Login();
$validador->verificar_logado();



$cadastro = new Cadastro();


try {
    $cadastro->mostrar_cadastros();
} catch (PDOException $e) {
    echo "Erro ao exibir cadastros: " . $e->getMessage();
}


?>