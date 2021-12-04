<?php
require "../model/conexao.php";
require "../model/Adicional.php";

$objAdicional = new Adicional();

$dados = $objAdicional->listarTodos($conexao);

if (isset($_GET['id'])) {
    $codigo = $_GET['id'];
    $acao = $_GET['acao'];

    if ($acao == 'excluir') {
        if ($objAdicional->excluirOpcoes($conexao, $codigo))
            header("location:../view/index.php"); //redireciono para página inicial
    }
}elseif($acao == 'editar'){
    $dadoscodigo = $objAdicional->listarporCodigo($conexao, $codigo);
    while($dadosOpcoes=$dadoscodigo->fetch_object()){
        //variaveis
        $codigo = $dadosAdicional->codigo;
        $lanche = $dadosAdicional->lanche;
        $bebida = $dadosAdicional->bebida;
        $adicional = $dadosAdicional->adicional;
        $edicao = true;
    }
}elseif(isset($_POST['edicao'])){
echo 'chegou';
    if($objAdicional->atualizarAdicional($conexao, $objAdicional)){
    header("location:../view/index.php");
}else{
    echo "Erro ao inserir!";
}
}elseif(isset($_POST['codigo'])){
if($objAdicional->inserirAdicional($conexao, $objAdicional)){
    header("location:../view/index.php");
}
}