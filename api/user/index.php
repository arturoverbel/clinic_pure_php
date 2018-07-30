<?php

header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

include_once('../../models/User.php');

$object = new User();
$data = $object->getList();

echo  json_encode($data);
