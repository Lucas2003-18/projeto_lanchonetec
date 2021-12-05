<?php
require_once "conexao.php";

class Adicional
{

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

    public function salvar(){
        $connection = new Connection();
        $conn = $connection->getConnection();
        if($this->id > 0){
            try{
                $query = 'UPDATE adicional SET lanche = :lanche, bebida = :bebida, adicional = :adicional WHERE id = :id';
                $stmt = $conn->prepare($query);
                if($stmt->execute(array(':id'=>$this->id, ':lanche'=>$this->lanche, ':bebida'=>$this->bebida, ':adicional'=>$this->adicional)))
                {
                    $result = $stmt->rowCount();
                }
            } catch(PDOException $e) {
                echo 'ERRO: '.$e->getMessage();
            }
            if($result > 0){
                return true;
            }else{
                return false;
            }
        }else{
            try{
                $query = 'INSERT INTO adicional VALUES (NULL, :lanche, :bebida, :adicional)';
                $stmt = $conn->prepare($query);
                if($stmt->execute(array(':lanche'=>$this->lanche, ':bebida'=>$this->bebida, ':adicional'=>$this->adicional)))
                {
                    $result = $stmt->rowCount();
                }
                if($result > 0){
                    return true;
                }else{
                    return false;
                }
            } catch (PDOException $e){
                echo 'ERRO: '.$e->getMessage();
            }
        }
    }

    public function excluir($id){
        $connection = new Connection();
        $conn = $connection->getConnection();
        try{
            $query = 'DELETE FROM adicional WHERE id = :id';
            $stmt = $conn->prepare($query);
            if($stmt->execute(array(':id'=>$this->id)))
            {
                $result = $stmt->rowCount();
            }
        } catch (PDOException $e)
        {
            echo 'ERRO: '.$e->getMessage();
        }
        return $result;
    }

    public function listarTodos()
    {
        $connection = new Conexao();
        $conn = $connection->getConnection();

        try {
            $comandosql = "SELECT * FROM adicional";
            $stmt = $conn->prepare($comandosql);
            $result = array();
            if($stmt->execute()){
                while($rs = $stmt->fetchObject(Adicional::class)){
                    $result[] = $rs;
                }
            }else{
                $result = false;
            }
            return $result;
        } catch (PDOException $e) {
            echo 'ERRO: '.$e->getMessage();
        }
        // //consulta banco de dados e trazer todos os registros do cliente
        // $dados = $conexao->query($comandosql);
        // return $dados;
    }
}

?>