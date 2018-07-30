<?php

require_once('ModelAbstract.php');

class TypeAccident extends ModelAbstract {
    
    function __construct(){
        $this->table = 'type_accident';
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
        
        $name = $data['name'];
        $nickname = $data['nickname'];
        
        $sql = "INSERT INTO $this->table (name, nickname)
                VALUES ('$name', '$nickname')";
        
        return $this->passQuery($sql);
    }
    
    
}