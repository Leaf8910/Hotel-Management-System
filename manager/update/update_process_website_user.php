<?php

include "../../koneksi.php";
$em = $_POST['email'];
$name = $_POST['full_name'];
$un = $_POST['username'];
$pwd = $_POST['password'];
$gender = $_POST['gender'];

$query = "UPDATE user SET
          email = '$em',
          full_name = '$name',
          username = '$un',
          pwd = '$pwd',
          gender = '$gender'
          WHERE email = '$em'";

mysqli_query($koneksi, $query);
header("location:../show_website_user.php");

?>