<?php
require "../model/conexao.php";
require "../model/Lanche.php";

$objLanche = new Lanche();

$dados = $objLanche->listarTodos($conexao);

if (isset($_GET['id'])) {
    $codigo = $_GET['id'];
    $acao = $_GET['acao'];

    if ($acao == 'excluir') {
        if ($objLanche->excluirOpcoes($conexao, $codigo))
            header("location:../view/index.php"); //redireciono para página inicial
    }
}elseif($acao == 'editar'){
    $dadoscodigo = $objLanche->listarporCodigo($conexao, $codigo);
    while($dadosOpcoes=$dadoscodigo->fetch_object()){
        //variaveis
        $codigo = $dadosLanche->codigo;
        $id = $dadosLanche->id;
        $tipo = $dadosLanche->tipo;
        $edicao = true;
    }
}elseif(isset($_POST['edicao'])){
echo 'chegou';
    if($objLanche->atualizarLanche($conexao, $objLanche)){
    header("location:../view/index.php");
}else{
    echo "Erro ao inserir!";
}
}elseif(isset($_POST['codigo'])){
if($objLanche->inserirLanche($conexao, $objLanche)){
    header("location:../view/index.php");
}
}