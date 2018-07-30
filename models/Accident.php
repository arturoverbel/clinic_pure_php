<?php

require_once('ModelAbstract.php');
require_once('TypeAccident.php');
require_once('User.php');

class Accident extends ModelAbstract{
    
    function __construct(){
        $this->table = 'accident';
    }
    
    public function getList(){
        
        $return = [];
        $data = $this->passQuery('SELECT * FROM ' . $this->table);
        
        if ($data->num_rows > 0) { 
            
            while($row = $data->fetch_assoc()) {
                $type = new TypeAccident();
                $row['TypeAccident'] = $type->find( $row['id_type_accident'] );
                
                $user = new User();
                $row['User'] = $user->find( $row['id_user'] );
                
                $return[] = $row;
            }
            
            
        }
        
        return $return;
    }
    
    public function find($id){
        
        $data = $this->passQuery('SELECT * FROM ' . $this->table . ' WHERE id=' . $id);
        
        if ($data->num_rows > 0) {    
            $return = [];
            while($row = $data->fetch_assoc()) {
                $type = new TypeAccident();
                $row['TypeAccident'] = $type->find( $row['id_type_accident'] );
                
                $user = new User();
                $row['User'] = $user->find( $row['id_user'] );
                
                $return[] = $row;
            }
            return $return[0];
        }
        
        return [];
    }
    
    public function insert($data){
        
        $now = new \DateTime();
        $format = $now->format('Y-m-d H:m:s');
        
        $id_type_accident = $data['id_type_accident'];
        $id_user = $data['id_user'];
        $observations = $data['observations'];
        
        $sql = "INSERT INTO $this->table (id_type_accident, id_user, observations, datetime)
                VALUES ($id_type_accident, $id_user, '$observations', '$format')";
        
        return $this->passQuery($sql);
        
    }
    
    
}