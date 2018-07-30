<?php

header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Max-Age: 3600");

include_once('../../models/Accident.php');

$accident = new Accident();
$return = [];

if($_SERVER["REQUEST_METHOD"] == "POST") {
    
    if( !isset($_POST['id_type_accident']) || !isset($_POST['id_user']) || !isset($_POST['observations']) ){
        echo json_encode($return); 
        die();
    }
    
    
    $return = $accident->insert([
        'id_type_accident' => $_POST['id_type_accident'], 
        'id_user' => $_POST['id_user'], 
        'observations' => $_POST['observations']
    ]);
}else{
    
    if( !isset($_GET['id_type_accident']) || !isset($_GET['id_user']) || !isset($_GET['observations']) ){
        echo json_encode($return); 
        die();
    }
    
    $return = $accident->insert([
        'id_type_accident' => $_GET['id_type_accident'], 
        'id_user' => $_GET['id_user'], 
        'observations' => $_GET['observations']
    ]);
}

echo json_encode($return);
