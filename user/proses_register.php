<?php

include "koneksi.php";
$email = $_POST['email'];
$fullname = $_POST['fullname'];
$username = $_POST['username'];
$pwd = $_POST['password'];
$gender = $_POST['gender'];
$query = "INSERT INTO user SET
          email = '$email',
          fullname = '$fullname',
          username = '$username',
          pwd = '$pwd', 
          gender = '$gender'";

mysqli_query($koneksi, $query);
header("location:login.php");

?>

