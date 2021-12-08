<?php
require("../../../model/Cliente.php");

class ClienteController{

    // public function salvarCliente(){
    //     $cliente = new Cliente();
    //     if(isset($_SESSION['id'])){ $cliente->setId($_REQUEST['id']); }
    //     $cliente->setNome($_POST['nome']);
    //     $cliente->setEndereco($_POST['endereco']);
    //     $cliente->setTelefone($_POST['telefone']);

    //     if($cliente->save() == ){
            
    //     }else{
    //         return true;
    //     }
    // }

    public function listarClientes(){
        $cliente = new Cliente();
        return $cliente->listarTodos();
    }

    public function excluir($id){
        $cliente = new Cliente();
        $cliente =  $cliente->remove($id);
    }

}
