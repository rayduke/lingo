<?php

$host = "localhost";
$user = "root";
$password = "root";
$database = "lingo";


function createconnection(){
    $conn = mysqli_connect($host, $user, $password, $database);
}



