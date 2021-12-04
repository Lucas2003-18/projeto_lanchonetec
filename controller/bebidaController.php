<?php
require "../model/conexao.php";
require "../model/Bebida.php";

$objBebida = new Bebida();

$dados = $objBebida->listarTodos($conexao);

if (isset($_GET['id'])) {
    $codigo = $_GET['id'];
    $acao = $_GET['acao'];

    if ($acao == 'excluir') {
        if ($objBebida->excluirOpcoes($conexao, $codigo))
            header("location:../view/index.php"); //redireciono para página inicial
    }
}elseif($acao == 'editar'){
    $dadoscodigo = $objBebida->listarporCodigo($conexao, $codigo);
    while($dadosOpcoes=$dadoscodigo->fetch_object()){
        //variaveis
        $codigo = $dadosBebida->codigo;
        $id = $dadosBebida->id;
        $nome = $dadosBebida->nome;
        $tipo = $dadosBebida->tipo;
        $edicao = true;
    }
}elseif(isset($_POST['edicao'])){
echo 'chegou';
    if($objBebida->atualizarBebida($conexao, $objBebida)){
    header("location:../view/index.php");
}else{
    echo "Erro ao inserir!";
}
}elseif(isset($_POST['codigo'])){
if($objBebida->inserirBebida($conexao, $objBebida)){
    header("location:../view/index.php");
}
}