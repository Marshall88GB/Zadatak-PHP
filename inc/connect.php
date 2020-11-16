<?php 

$serverName = "localhost";
$username = "root";
$password = "";
$db_name = "employees";

$conn = mysqli_connect($serverName,$username,$password,$db_name);

if(!$conn){
    die ("Conection Faild " . mysqli_connect_error());
};

?>