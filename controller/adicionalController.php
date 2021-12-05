<?php
require "../../../model/conexao.php";
require "../../../model/Adicional.php";

class AdicionalController{

    public function salvarAdicional(){
        $adicional = new Adicional();

        if(isset($_SESSION['id'])){ $adicional->setId($_POST['id']); }
        $adicional->setLanche($_POST['lanche']);
        $adicional->setBebida($_POST['bebida']);
        $adicional->setAdicional($_POST['adicional']);

        if($adicional->save() == 'uequals'){
            echo '<div class="alert h6 mt-2" role="alert" style="color: #856404;background-color: #fff3cd;border-color: #ffeeba;">
                    User already exists.
                  </div>';
        }else{
            return true;
        }
    }

    public function listAll(){
        $adicional = new Adicional();
        return $adicional->listarTodos();
    }

    public function excluir($id){
        $adicional = new Adicional();
        $adicional = $adicional->remove($id);
    }

    public function editar($id){
        $adicional = new Adicional();
        $adicional = $adicional->edition($id);
    }
}


/*$objAdicional = new Adicional();

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
}*/