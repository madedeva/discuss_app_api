<?php

$server = "localhost";
$user = "root";
$password = "";
$db = "discuss_app";

$connect = new mysqli($server,$user,$password,$db);

// if($connect->connect_error){
//     die("Connection failed: " . $connect->connect_error);
// }else{
//     echo "Connected successfully";
// }

?>