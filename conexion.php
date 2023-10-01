<?php
$servername ="localhost";
$username ="root";
$password="";
$dbname="wilymat";
//se crea la conexion
$conn=mysqli_connect($servername, $username, $password, $dbname);
if ($conn->connect_errno) {
    die("conection failed: " . $conn->connect_errno);
} 
?>