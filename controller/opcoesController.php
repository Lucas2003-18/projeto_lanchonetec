<?php
require "../model/conexao.php";
require "../model/opcoes.php";

$objOpcoes = new Opcoes();

$dados = $objOpcoes->listarTodos($conexao);

if(isset($_GET['id'])) {
    $
}

?>