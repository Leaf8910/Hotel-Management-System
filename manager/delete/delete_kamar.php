<?php

include "../../koneksi.php";
$code = $_GET['room_no'];
$query = "DELETE FROM room WHERE room_no = '$code'";
mysqli_query($koneksi, $query);
header("location:../show_kamar.php");

?>