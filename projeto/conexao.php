<?php

$servidor = "127.0.0.1";
$usuario = "root";
$senha = "";
$banco = "auxilio";

$conexao = mysqli_connect($servidor,$usuario,$senha,$banco);

if (!$conexao) {
    echo "Erro. Falha na conexão ao Servidor" . PHP_EOL;
    echo "Debugando Erro:" . mysqli_connect_errno() . PHP_EOL;
    echo "Debugando Erro: " . mysqli_connect_error() . PHP_EOL;
    exit;
}

?>