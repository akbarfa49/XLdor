<?php
$host="localhost";
$user="root";
$pass="";
$db="dor_xl";

$conn = new mysqli($host, $user, $pass, $db);

if(!$conn){
	echo $conn->connect_error();
}


?>