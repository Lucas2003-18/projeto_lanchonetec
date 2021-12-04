<?php
require_once "conexao.php";

class Adicionais extends Db{

    //atributos
    private $codigo;
    private $id;
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

    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of codigo
     */ 
    public function getCodigo()
    {
        return $this->codigo;
    }

    /**
     * Set the value of codigo
     *
     * @return  self
     */ 
    public function setCodigo($codigo)
    {
        $this->codigo = $codigo;

        return $this;
    }
}

?>