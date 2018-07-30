<?php

require_once('./models/Accident.php');
require_once('./models/TypeAccident.php');
require_once('./models/User.php');

listarAccident();

function listarAccident(){
    $accident = new Accident();
    $data = $accident->getList();
    print_r( $data );
}

function listarTypeAccident(){
    $type = new TypeAccident();
    $data = $type->getList();
    print_r( $data );
}

function listarUser(){
    $user = new User();
    $data = $user->getList();
    print_r( $data );
}

function insertarAccident(){
    $accident = new Accident();
    $data = $accident->insert(['id_type_accident' => 3, 'id_user' => 1, 'observations' => 'Observaciones agregadas dinamicamente']);
    print_r( $data );
}

function insertarType(){
    $type = new TypeAccident();
    $data = $type->insert(['name' => 'Paro cardíaco', 'nickname' => 'paro_cardiaco']);
    print_r( $data );
}

function findType(){
    $type = new TypeAccident();
    $data = $type->find(1);
    print_r( $data );
}


