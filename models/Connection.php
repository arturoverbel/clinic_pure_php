<?php

class Connection{
	
    private $connection;
    
    private $host = '127.0.0.1';
    private $user = 'root';
    private $pass = 'root';
    private $db = 'clinic';
    
    
    function __construct(){
        $this->connection = new \mysqli($this->host, $this->user, $this->pass, $this->db);
        mysqli_set_charset($this->connection,"utf8");
    }

    function query($query){
        try{
            return $this->connection->query($query);
        }catch( Exception $e){
            echo $e->errorMessage(); 
        }
    }
    
    function close(){
        $this->connection->close();
    }
    
    
}