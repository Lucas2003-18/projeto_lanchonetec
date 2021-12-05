<?php
require "../model/conexao.php";
require "../model/Bebida.php";

class BebidaController{

    public function salvarBebida(){
        $bebida = new Bebida();

        if(isset($_SESSION['id'])){ $bebida->setId($_POST['id']); }
        $bebida->setNome($_POST['nome']);
        $bebida->setTipo($_POST['tipo']);

        if($bebida->save() == 'uequals'){
            echo '<div class="alert h6 mt-2" role="alert" style="color: #856404;background-color: #fff3cd;border-color: #ffeeba;">
                    User already exists.
                  </div>';
        }else{
            return true;
        }
    }

    public function listAll(){
        $bebida = new Bebida();
        return $bebida->listarTodos();
    }

    public function excluir($id){
        $bebida = new Bebida();
        $bebida = $bebida->remove($id);
    }

    public function editar($id){
        $bebida = new Bebida();
        $bebida = $bebida->edition($id);
    }
}

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