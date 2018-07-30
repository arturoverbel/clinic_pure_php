<?php

include_once '../models/User.php';

session_start();

if( !isset($_SESSION['id_user'])){
   header("location:login.php");
}

