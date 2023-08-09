<?php

include "../../koneksi.php";
$code = $_GET['customer_id'];
$query = "DELETE FROM customer WHERE customer_id = '$code'";
mysqli_query($koneksi, $query);
header("location:../show_pengunjung.php");

?>