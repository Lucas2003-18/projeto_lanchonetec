<?php
require "../model/conexao.php";
require "../model/Opcoes.php";

$objOpcoes = new Opcoes();

$dados = $objOpcoes->listarTodos($conexao);

if (isset($_GET['id'])) {
    $codigo = $_GET['id'];
    $acao = $_GET['acao'];

    if ($acao == 'excluir') {
        if ($objOpcoes->excluirOpcoes($conexao, $codigo))
            header("location:../view/index.php"); //redireciono para página inicial
    }
}elseif($acao == 'editar'){
    $dadoscodigo = $objOpcoes->listarporCodigo($conexao, $codigo);
    while($dadosOpcoes=$dadoscodigo->fetch_object()){
        //variaveis
        $codigo = $dadosOpcoes->codigo;
        $lanche = $dadosOpcoes->lanche;
        $bebida = $dadosOpcoes->bebida;
        $adicional = $dadosOpcoes->adicional;
        $edicao = true;
    }
}elseif(isset($_POST['edicao'])){
echo 'chegou';
    if($objOpcoes->atualizarOpcoes($conexao, $objOpcoes)){
    header("location:../view/index.php");
}else{
    echo "Erro ao inserir!";
}
}elseif(isset($_POST['codigo'])){
if($objOpcoes->inserirOpcoes($conexao, $objOpcoes)){
    header("location:../view/index.php");
}
}