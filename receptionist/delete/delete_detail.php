<?php
include "../../koneksi.php";
$code = $_GET['payment_detail_id'];
$query = "DELETE FROM payment_detail WHERE payment_detail_id = '$code'";
mysqli_query($koneksi, $query);
header("location:../show_detail.php");
?>