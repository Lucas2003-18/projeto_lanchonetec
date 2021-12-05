<?php
Class Conexao{
    private $host = 'localhost';
    private $dbname = 'lanchotec';
    private $username = 'lanchotec';
    private $password = 'master';
    private $connection;

    public function getConnection(){
        if(is_null($this->connection)){
            try {
                $this->connection = new PDO('mysql:host='.$this->host.';dbname='.$this->dbname,$this->username,$this->password);
                $this->connection->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
                $this->connection->exec('set names utf8');
            } catch (PDOException $e) {
                echo 'ERROR: '.$e->getMessage();
            }
        }
        return $this->connection;
    }
}
?>