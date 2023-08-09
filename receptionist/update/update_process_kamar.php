<?php

include "../../koneksi.php";
$no = $_POST['room_no'];
$type = $_POST['room_type'];
$price = $_POST['price'];

$query = "UPDATE room SET
          room_no = '$no',
          room_type = '$type',
          price = '$price'
          WHERE room_no = '$no'";

mysqli_query($koneksi, $query);
header("location:../show_kamar.php");
?>