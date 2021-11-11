<?php
require "../model/conexao.php";
require "../model/Opcoes.php";

$objOpcoes = new Opcoes();

$dados = $objOpcoes->listarTodos($conexao);

if(isset($_GET['id'])) {
    $
}

?>