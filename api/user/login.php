<?php

header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Max-Age: 3600");

include_once('../../models/User.php');

$object = new User();
$return = [];
if($_SERVER["REQUEST_METHOD"] == "POST") {

    if( !isset($_POST['username']) || !isset($_POST['password'])){
        echo json_encode($return); 
        die();
    }

    $return = $object->login(
        $_POST['username'], 
        $_POST['password']
    );
}else{
    if( !isset($_GET['username']) || !isset($_GET['password'])){
        echo json_encode($return); 
        die();
    }

    $return = $object->login(
        $_GET['username'], 
        $_GET['password']
    );
}

echo json_encode($return);
