<?php

include "../../koneksi.php";
$room_no = $_POST['room_no'];
$type = $_POST['room_type'];
$price = $_POST['price'];

$query = "INSERT INTO room SET
          room_no= '$room_no',
          room_type = '$type',
          price = '$price'";

mysqli_query($koneksi, $query);
header("location:../show_kamar.php");

?>