<?php

include "../../koneksi.php";
$id = $_POST['employee_id'];
$name = $_POST['employee_name'];
$gender = $_POST['gender'];
$query = "INSERT INTO employee SET
          employee_id = '$id',
          employee_name = '$name',
          gender = '$gender'";
mysqli_query($koneksi, $query);
header("location:../show_karyawan.php");

?>