<?php

include "../../koneksi.php";
$id = $_POST['customer_id'];
$name = $_POST['customer_id'];
$address = $_POST['address'];
$tlp = $_POST['telephone_no'];
$ic = $_POST['ic_no'];
$gender = $_POST['gender'];

$query = "INSERT INTO customer SET
          customer_id = '$id',
          customer_name = '$name',
          address = '$address',
          gender = '$gender',
          telephone_no = '$telephone_no',
          ic_no = '$ic_no'";

mysqli_query($koneksi, $query);
header("location:../show_pengunjung.php");
?>
