<?php
include 'connect.php';
$username=$_POST['username'];
$password=$_POST['password'];
// echo "username = $username <br>";
// echo "password = $password";
if ($username == "" || $password == "") {
  echo "<script>
          alert('กรุณากรอก username หรือ password');
          location.href='login.php';
        </script>";
}else{

require 'connect.php';

$sql = "SELECT * FROM user WHERE username='$username' AND password='$password'";

$resule = mysqli_query($con,$sql);
// $resule = $con =>query($sql);แบบย่อ
$num = mysqli_num_rows($resule);
$row = mysqli_fetch_array($resule);
if ($num == 0) {
    echo "<script>
            alert('username or password invalid');
            location.href='login.php';
          </script>";
  } else {
    $_SESSION['username'] = $row['username'];
    $_SESSION['fullname'] = $row['fullname'];
    $_SESSION['password'] = $row['password'];
    header('location:dist/');
  }
}

?>