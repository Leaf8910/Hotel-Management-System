<?php

include "../../koneksi.php";
$code = $_GET['employee_id'];
$query = "DELETE FROM employee WHERE employee_id='$code'";
mysqli_query($koneksi, $query);
header("location:../show_karyawan.php");
?>