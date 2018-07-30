<?php

require_once('ModelAbstract.php');

class User extends ModelAbstract{
    
    function __construct(){
        $this->table = 'user';
    }
    
    public function getList(){
        
        $return = [];
        $data = $this->passQuery('SELECT * FROM ' . $this->table);
        
        if ($data->num_rows > 0) { 
            while($row = $data->fetch_assoc()) { $return[] = $row; }
        }
        
        return $return;
    }
    
    public function insert($data){
        
        $username = $data['username'];
        $password = $data['password'];
        
        $sql = "INSERT INTO $this->table (username, password)
                VALUES ($username, $password, )";
        
        return $this->passQuery($sql);
    }
    
    public function login($username, $password){
        
        $data = $this->passQuery('SELECT * FROM ' . $this->table . ' WHERE username="' . $username . '" AND password="'. $password . '"');
        
        if ($data->num_rows > 0) {    
            $return = [];
            while($row = $data->fetch_assoc()) {
                $return[] = $row;
            }
            return $return[0];
        }
        
        return [];
    }
    
    
}