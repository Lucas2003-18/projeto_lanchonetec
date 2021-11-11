<?php
require_once "conexao.php";


// abstract class Db{
//     abstract public function save();
//     abstract public function remove($id);
//     abstract public function find($id);
// }

class User{

    private $idUsuario;
    private $nome;
    private $senha;

    public function getIdUsuario(){
        return $this->idUsuario;
    }
    public function setIdUsuario($idUsuario){
        $this->idUsuario = $idUsuario;
    }

    public function getNome(){
        return $this->nome;
    }
    public function setNome($nome){
        $this->nome = $nome;
    }

    public function getSenha(){
        return $this->senha;
    }
    public function setSenha($senha){
        $this->senha = $senha;
    }

}

// class Pedido{

//     private $idPedido;
//     private $lanche;
//     private $bebida;
//     private $data;
//     private $observacoes;

// }

class Opcoes{

    private $lanche; 
    private $bebida; 
    private $adicional;

    public function getLanche(){
        return $this->lanche;
    }
    public function setLanche($lanche){
        $this->lanche = $lanche;
    }

    public function getBebida(){
        return $this->bebida;
    }
    public function setBebida($bebida){
        $this->bebida = $bebida;
    }
    
    public function getAdicional(){
        return $this->adicional;
    }
    public function setAdicional($adicional){
        $this->adicional = $adicional;
    }

}

?>