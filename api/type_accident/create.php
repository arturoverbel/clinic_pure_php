<?php

header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

include_once('../../models/TypeAccident.php');

$object = new TypeAccident();

$return = $object->insert([
    'name' => $_POST['name'], 
    'nickname' => $_POST['nickname']
]);

echo json_encode($return);
