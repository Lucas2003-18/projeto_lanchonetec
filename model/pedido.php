<?php
require_once "conexao.php";

class Pedido extends Db{

    //atributos
    private $idPedido;
    private $lanche;
    private $bebida;
    private $data;
    private $observacoes;

    //getters and setters
    /**
     * Get the value of idPedido
     */ 
    public function getIdPedido()
    {
        return $this->idPedido;
    }

    /**
     * Set the value of idPedido
     *
     * @return  self
     */ 
    public function setIdPedido($idPedido)
    {
        $this->idPedido = $idPedido;

        return $this;
    }

    /**
     * Get the value of lanche
     */ 
    public function getLanche()
    {
        return $this->lanche;
    }

    /**
     * Set the value of lanche
     *
     * @return  self
     */ 
    public function setLanche($lanche)
    {
        $this->lanche = $lanche;

        return $this;
    }

    /**
     * Get the value of bebida
     */ 
    public function getBebida()
    {
        return $this->bebida;
    }

    /**
     * Set the value of bebida
     *
     * @return  self
     */ 
    public function setBebida($bebida)
    {
        $this->bebida = $bebida;

        return $this;
    }

    /**
     * Get the value of data
     */ 
    public function getData()
    {
        return $this->data;
    }

    /**
     * Set the value of data
     *
     * @return  self
     */ 
    public function setData($data)
    {
        $this->data = $data;

        return $this;
    }

    /**
     * Get the value of observacoes
     */ 
    public function getObservacoes()
    {
        return $this->observacoes;
    }

    /**
     * Set the value of observacoes
     *
     * @return  self
     */ 
    public function setObservacoes($observacoes)
    {
        $this->observacoes = $observacoes;

        return $this;
    }
}

?>