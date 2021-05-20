<?php
$servername = "localhost";
$username = "id16570444_tdfdata";
$password = "Testdemo@123";
$db_name = "id16570444_tdf";

$conn  = mysqli_connect($servername,$username,$password,$db_name) ;

if (!$conn) {
  echo "Connection Failed";
}
?>
