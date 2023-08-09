<?php

include "../../koneksi.php";
$no = $_POST['payment_no'];
$customer_id = $_POST['id_pengunjung'];
$employee_id = $_POST['id_karyawan'];
$array_room = $_POST['data_kamar'];
$date_checkin = $_POST['date_checkin'];
$date_checkout = $_POST['date_checkout'];

// information on the number of rooms booked
$total_room = count($array_room);

// date check in
$separate_date_checkin = explode("-", $date_checkin);
$int_date_checkin = intval($separate_date_checkin[2]);

// date check out
$pisah_date_checkout = explode("-", $date_checkout);
$int_date_checkout = intval($pisah_date_checkout[2]);

$duration_stay = $int_date_checkout - $int_date_checkin;

// --> ... <--

// --> take the price and then add it <--
$prefix_q = "query_room_";
$prefix_r = "result_";
$str_h = "str_price_";
$int_h = "int_price_";
$total_price = 0;
for ($i=0; $i < count($array_room); $i++) { 
  ${$prefix_q.$i} = "SELECT * FROM room WHERE room_no = '$array_room[$i]'";
  ${$prefix_r.$i} = mysqli_query($koneksi, ${$prefix_q.$i});

  foreach (${$prefix_r.$i} as $row) {
    ${$str_h.$i} = $row['price'];
  }
  ${$int_h . $i} = intval(${$str_h.$i});
  $total_price += ${$int_h . $i};
}
// --> ... <--

$query = "UPDATE payment SET
          payment_no = '$no',
          customer_id = '$customer_id',
          employee_id = '$employee_id',
          total_room = '$total_room',
          date_checkin = '$date_checkin',
          date_checkout = '$date_checkout',
          duration_stay = '$duration_stay',
          total_price = '$total_price'
          WHERE payment_no = '$no'";

mysqli_query($koneksi, $query);
header("location:../show_transaksi.php");

?>s