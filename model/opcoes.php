<?php
require_once "conexao.php";

class Opcoes extends Db{

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