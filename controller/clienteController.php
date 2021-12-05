<?php
require("../../../model/Cliente.php");

class ClienteController{

    public function salvarCliente(){
        $cliente = new Cliente();
        if(isset($_SESSION['id'])){ $cliente->setId($_REQUEST['id']); }
        $cliente->setNome($_POST['nome']);
        $cliente->setEndereco($_POST['endereco']);
        $cliente->setTelefone($_POST['telefone']);

        if($cliente->save() == 'uequals'){
            echo '<div class="alert h6 mt-2" role="alert" style="color: #856404;background-color: #fff3cd;border-color: #ffeeba;">
                    User already exists.
                  </div>';
        }else{
            return true;
        }
    }


    public function listAll(){
        $cliente = new Cliente();
        return $cliente->listarTodos();
    }

    public function excluir($id){
        $cliente = new Cliente();
        $cliente =  $cliente->remove($id);
    }

    public function editar($id){
        $cliente = new Cliente();
        $cliente = $cliente->edition($id);
    }
}

$objCliente = new Cliente(); //instância da classe cliente

$dados = $objCliente->listarTodos();

if (isset($_GET['id'])) {
    $codigo = $_GET['id'];
    $acao = $_GET['acao'];

    if ($acao == 'excluir') {
        if ($objCliente->excluirCliente($conexao, $codigo))
            header("location:../view/index.php"); //redireciono para página inicial
    }
}else if($acao == 'editar'){
    $dadoscodigo = $objCliente->listarporCodigo($conexao, $codigo);
    while($dadosCliente=$dadoscodigo->fetch_object()){
        //variaveis
        $codigo = $dadosCliente->codigo;
        $nome = $dadosCliente->nome;
        $endereco = $dadosCliente->endereco;
        $telefone = $dadosCliente->telefone;
        $edicao = true;
    }
}else if(isset($_POST['edicao'])){
echo 'chegou';
    if($objCliente->atualizarCliente($conexao, $objCliente)){
    header("location:../view/index.php");
}else{
    echo "Erro ao inserir!";
}
}else if(isset($_POST['codigo'])){
    if($objCliente->inserirCliente($conexao, $objCliente)){
        header("location:../view/index.php");
    }
}