<?php

include_once('Connection.php');

abstract class ModelAbstract{
    
    protected $connection;
    protected $table = 'accident';
    
    protected function passQuery($query){
        $this->openConnection();
        $result = $this->connection->query($query);
        $this->closeConnection();
        return $result;
    }
    
    protected function closeConnection(){
        return $this->connection->close();
    }
    protected function openConnection(){
        return $this->connection = new Connection();
    }
    
    abstract public function getList();
    abstract public function insert($data);
    public function find($id){
        
        $data = $this->passQuery('SELECT * FROM ' . $this->table . ' WHERE id=' . $id);
        
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