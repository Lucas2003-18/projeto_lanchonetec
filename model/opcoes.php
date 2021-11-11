<?php
require_once "conexao.php";

class Opcoes extends Db{

    //atributos
    private $lanche; 
    private $bebida; 
    private $adicional;

    //getters and setters

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
    * Get the value of adicional
    */ 
    public function getAdicional()
    {
        return $this->adicional;
    }

    /**
    * Set the value of adicional
    *
    * @return  self
    */ 
    public function setAdicional($adicional)
    {
        $this->adicional = $adicional;

    return $this;
    }
}

?>