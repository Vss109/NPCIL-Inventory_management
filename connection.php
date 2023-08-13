<?php
error_reporting(0);
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "inventory";
$dbport = 3307;

$conn = mysqli_connect($servername,$username,$password,$dbname,$dbport);

if($conn)
{
   // echo "Connection ok";
}
else
{
  echo "Connection failed".mysqli_connect_error();
}
?>