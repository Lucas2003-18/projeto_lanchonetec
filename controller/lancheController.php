<?php
require "../../../model/conexao.php";
require "../../../model/Lanche.php";

class LancheController{

    public function salvarLanche(){
        $lanche = new Lanche();

        if(isset($_SESSION['id'])){ $lanche->setId($_POST['id']); }
        $lanche->setTipo($_POST['tipo']);

        if($lanche->save() == 'uequals'){
            echo '<div class="alert h6 mt-2" role="alert" style="color: #856404;background-color: #fff3cd;border-color: #ffeeba;">
                    User already exists.
                  </div>';
        }else{
            return true;
        }
    }

    public function listAll(){
        $lanche = new Lanche();
        return $lanche->listarTodos();
    }

    public function excluir($id){
        $lanche = new Lanche();
        $lanche = $lanche->remove($id);
    }

    public function editar($id){
        $lanche = new Lanche();
        $lanche = $lanche->edition($id);
    }
}

/*
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
}*/