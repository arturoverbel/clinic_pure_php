<?php

header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

include_once('../../models/Accident.php');

$accident = new Accident();
$data = $accident->find($_GET['id']);

echo  json_encode($data);
