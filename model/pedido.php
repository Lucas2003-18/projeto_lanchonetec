<?php
require_once "conexao.php";

class Pedido extends Db{

    private $idPedido;
    private $lanche;
    private $bebida;
    private $data;
    private $observacoes;

    public function getIdPedido(){
        return $this->idPedido;
    }
    public function setIdPedido($idPedido){
        $this->idPedido = $idPedido;
    }
    
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
    
    public function getData(){
        return $this->data;
    }
    public function setData($data){
        $this->data = $data;
    }
    
    public function getObservacoes(){
        return $this->observacoes;
    }
    public function setObservacoes($observacoes){
        $this->observacoes = $observacoes;
    }

}

?>