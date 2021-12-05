<?php
require_once 'conexao.php';

class Lanche
{

    //atributos
    private $codigo;
    private $id;
    private $nome;
    private $tipo;

     //getters and setters
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
     * Get the value of tipo
     */ 
    public function getTipo()
    {
        return $this->tipo;
    }

    /**
     * Set the value of tipo
     *
     * @return  self
     */ 
    public function setTipo($tipo)
    {
        $this->tipo = $tipo;

        return $this;
    }

     /**
     * Get the value of nome
     */ 
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * Set the value of nome
     *
     * @return  self
     */ 
    public function setNome($nome)
    {
        $this->nome = $nome;

        return $this;
    }

    public function salvar(){
        $connection = new Connection();
        $conn = $connection->getConnection();
        if($this->id > 0){
            try{
                $query = 'UPDATE lanche SET nome = :nome, tipo = :tipo WHERE id = :id';
                $stmt = $conn->prepare($query);
                if($stmt->execute(array(':id'=>$this->id, ':nome'=>$this->nome, ':tipo'=>$this->tipo)))
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
                $query = 'INSERT INTO bebida VALUES (NULL, :nome, :tipo)';
                $stmt = $conn->prepare($query);
                if($stmt->execute(array(':nome'=>$this->nome, ':tipo'=>$this->tipo)))
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
            $query = 'DELETE FROM bebida WHERE id = :id';
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
            $comandosql = "SELECT * FROM bebida";
            $stmt = $conn->prepare($comandosql);
            $result = array();
            if($stmt->execute()){
                while($rs = $stmt->fetchObject(Bebida::class)){
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