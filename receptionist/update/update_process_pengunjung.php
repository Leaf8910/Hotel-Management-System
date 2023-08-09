<?php

include "../../koneksi.php";
$id = $_POST['customer_id'];
$name = $_POST['customer_name'];
$addrss = $_POST['address'];
$gender = $_POST['gender'];
$phonenumber = $_POST['phonenumber'];
$ic_no = $_POST['ic_no'];

$query = "UPDATE customer SET
          customer_id = '$id',
          customer_name = '$nama',
          addrss = '$address',
          gender = '$gender',
          phonenumber = '$phonenumber',
          ic_no = '$ic_no'
          WHERE customer_id = '$id'";

mysqli_query($koneksi, $query);
header("location:../show_pengunjung.php");


?>