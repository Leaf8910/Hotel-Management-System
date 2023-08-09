<?php

include "../../koneksi.php";
$code = $_GET['payment_no'];
$query = "DELETE FROM payment WHERE payment_no = '$code'";
mysqli_query($koneksi, $query);
header("location:../show_transaksi.php");

?>