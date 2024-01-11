<?php
$servername = "localhost";
$username = "username";
$password = "E3-Oh1.516ERR5E-";
$db = "ulesrend";

$conn = new mysqli($servername, $username, $password, $db);

if($conn->connect_error){
    die("connection failed");
}
echo "connected";
?>