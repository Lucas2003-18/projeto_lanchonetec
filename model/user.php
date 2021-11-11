<?php
require_once "conexao.php";

class User extends Db{

    //atributos
    private $id;
    private $name;
    private $surname;
    private $email;
    private $user;
    private $password;
    private $type;

    //getters and setters
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
     * Get the value of name
     */ 
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of name
     *
     * @return  self
     */ 
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get the value of surname
     */ 
    public function getSurname()
    {
        return $this->surname;
    }

    /**
     * Set the value of surname
     *
     * @return  self
     */ 
    public function setSurname($surname)
    {
        $this->surname = $surname;

        return $this;
    }

    /**
     * Get the value of email
     */ 
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set the value of email
     *
     * @return  self
     */ 
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get the value of user
     */ 
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Set the value of user
     *
     * @return  self
     */ 
    public function setUser($user)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get the value of password
     */ 
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set the value of password
     *
     * @return  self
     */ 
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get the value of type
     */ 
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set the value of type
     *
     * @return  self
     */ 
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    

    public function save(){
        $result = false;
        $connection = new Connection();

        if($conn = $connection->getConnection()){
            if($this->id > 0){
                try {
                    $query = 'UPDATE user SET name = :name, surname = :surname, dtBirthday = :dtBirth, email = :email, user = :user, password = :password, type = :type where id = :id';
                    $stmt = $conn->prepare($query);
                    if($stmt->execute(array(':name'=>$this->name, ':surname'=>$this->surname, ':dtBirthday'=>$this->dtBirth, ':email'=>$this->email, ':user'=>$this->user, ':password'=>$this->password, ':type'=>$this->type, ':id'=>$this->id))){
                        $result = $stmt->rowCount();
                    }
                } catch (PDOException $e) {
                    echo 'ERRO: '.$e->getMessage();
                }
            }else{
                $query = 'SELECT * FROM user WHERE user = :user';
                $stmt = $conn->prepare($query);
                if($stmt->execute(array(':user'=>$this->user))){
                    if($stmt->rowCount() == 1){
                        return 'uequals';
                    }else{
                        try {
                            $query = 'INSERT INTO user VALUES (NULL, :name, :surname, :dtBirth, :email, :user, md5(:password), :type)';
                            $stmt = $conn->prepare($query);
                            if($stmt->execute(array(':name'=>$this->name, ':surname'=>$this->surname, ':dtBirth'=>$this->dtBirth, ':email'=>$this->email, ':user'=>$this->user, ':password'=>$this->password, ':type'=>$this->type))){
                                $result = $stmt->rowCount();
                            }
                        } catch (PDOException $e) {
                            echo 'ERRO: '.$e->getMessage();
                        }
                    }
                }
            }
        }
        return $result;
    }

    public function remove($id){
        $connection = new Connection();
        $conn = $connection->getConnection();
        try {
            $result = false;
            $query = "SELECT * FROM user WHERE id = :id";
            $stmt = $conn->prepare($query);
            if($stmt->execute(array(':id'=>$id))){
                $result = true;
            }
            return $result;
        } catch (PDOExcepion $e) {
            echo 'ERRO: '.$e->getMessage();
        }
    }

    public function find($id){
        $connection = new Connection();
        $conn = $connection->getConnection();
        try {
            $query = "SELECT * FROM user WHERE id = :id";
            $stmt = $conn->prepare($query);
            if($stmt->execute(array(':id'=>$id))){
                if($stmt->rowCount() > 0){
                    $result = $stmt->fetchObject(User::class);
                }else{
                    $result = false;
                }
            }
            return $result;
        } catch (PDOExcepion $e) {
            echo 'ERRO: '.$e->getMessage();
        }
    }
    
    public function count(){
        $connection = new Connection();
        $conn = $connection->getConnection();
        try {
            $query = "SELECT count(*) FROM user";
            $stmt = $conn->prepare($query);
            $count = $stmt->exec();
            if(isset($count) && !empty($count)){
                return $count;
            }
            return false; 
        } catch (PDOExcepion $e) {
            echo 'ERRO: '.$e->getMessage();
        }
    }

    public function login(){
        $connection = new Connection();
        $conn = $connection->getConnection();
        try {
            $query = "SELECT * FROM user WHERE user = :username AND password = md5(:password)";
            $stmt = $conn->prepare($query);
            if($stmt->execute(array(':username'=>$this->user, ':password'=>$this->password))){
                if($stmt->rowCount() > 0){
                    $result = $stmt->fetchObject(User::class);
                }else{
                    $result = false;
                }
                return $result;
            }
        } catch (PDOException $e) {
            echo 'ERRO: '.$e->getMessage();
        }
    }

    public function listAll(){
        $connection = new Connection();
        $conn = $connection->getConnection();
        try {
            $query = "SELECT * FROM user";
            $stmt = $conn->prepare($query);
            $result = array();
            if($stmt->execute()){
                while ($rs = $stmt->fetchObject(User::class)) {
                    $result[] = $rs;
                }
            }else{
                $result = false;
            }
            return $result; 
        } catch (PDOExcepion $e) {
            echo 'ERRO: '.$e->getMessage();
        }
    }    
}


?>