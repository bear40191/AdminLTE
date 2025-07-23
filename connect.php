<?php
SESSION_start();
$host = "localhost";
$user = "root";
$pass = "";
$dbnamv= "phuriwat";
$con = mysqli_connect($host,$user,$pass,$dbnamv);

if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  exit();
}
?>