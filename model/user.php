<?php
require_once "conexao.php";

class User extends Db{

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


function saveUser(){
    try {
        $user = new User();

        isset($_POST['idUsuario']) ? $user->setIdUsuario($_POST['idUsuario']) : "idUsuario nao foi declarado";
        isset($_POST['nome']) ? $user->setNome($_POST['nome']) : "nome nao foi declarado";
        isset($_POST['senha']) ? $user->setSenha($_POST['senha']) : "senha nao foi declarada";

        // começar a mandar os dados pro db a partir daqui

    } catch (PDOException $e) {
        echo $e;
    }
}


?>