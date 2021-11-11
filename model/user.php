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

?>
