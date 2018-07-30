<?php

header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

include_once('../../models/TypeAccident.php');

$object = new TypeAccident();
$data = $object->find($_GET['id']);

echo  json_encode($data);
