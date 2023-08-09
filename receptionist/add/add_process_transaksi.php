<?php

include "../../koneksi.php";
$no = $_POST['payment_no'];
$customer_id = $_POST['customer_id'];
$employee_id = $_POST['employee_id'];
$room_array = $_POST['room_data'];
$date_checkin = $_POST['date_checkin'];
$date_checkout = $_POST['date_checkout'];

// data untuk mengetahui jumlah kamar yang dipesan
$total_room = count($room_array);

// --> data untuk lama menginap seseorang <--

// tanggal masuk
$date_checkin_split = explode("-", $date_checkin);
$int_datecheckin = intval($date_checkin_split[2]);

// // tanggal keluar
$date_checkout_split = explode("-", $date_checkout);
$date_checkout_split = intval($date_checkout_split[2]);

$durationofstay = $int_datecheckout - $int_datecheckin;

// --> ... <--

// --> mengambil harga kemudian ditotal <--
$prefix_q = "room_query_";
$prefix_r = "result_";
$str_h = "str_price_";
$int_h = "int_price_";
$total_harga = 0;
for ($i=0; $i < count($room_array); $i++) { 
  ${$prefix_q.$i} = "SELECT * FROM room WHERE room_no = '$room_array[$i]'";
  ${$prefix_r.$i} = mysqli_query($koneksi, ${$prefix_q.$i});

  foreach (${$prefix_r.$i} as $row) {
    ${$str_h.$i} = $row['price'];
  }
  ${$int_h . $i} = intval(${$str_h.$i});
  $total_price += ${$int_h . $i};
}
// --> ... <--

$payment_query = "INSERT INTO payment SET
          payment_no = '$no',
          customer_id = '$customer_id',
          employee_id = '$employee_id',
          total_room = '$total_room',
          date_checkin = '$date_checkin',
          date_checkout = '$date_checkout',
          durationofstay = '$durationofstay',
          total_price = '$total_price'";

// process for detail transaksi 
$room_no = implode(" - ", $room_array);
$id_dtl = bin2hex(random_bytes(5));
$payment_detail_query = "INSERT INTO payment_detail SET
                           payment_detail_id = '$id_dtl',
                           payment_no = '$no',
                           room_no = '$room_no'";


mysqli_query($koneksi, $payment_query);
mysqli_query($koneksi, $payment_detail_query);
header("location:../show_transaksi.php");

?>