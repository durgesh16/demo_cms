<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cms_demo";

$conn = new mysqli($servername,$username,$password,$dbname);

if($conn->connect_error)
{
    die("Connection error". $conn->connect_error);
}
// else
//     echo "connection eastablished";
//     print_r($conn);
?>
