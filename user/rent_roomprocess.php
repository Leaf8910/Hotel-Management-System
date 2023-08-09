<?php
session_start();

// Check if user is logged in
if (!isset($_SESSION['username'])) {
  header("Location: login.php");
  exit;
}

// Get the username
$username = $_SESSION['username'];

// Get the input values
$customer_id = $_POST['customer_id'];
$customer_name = $_POST['customer_name'];
$phonenumber = $_POST['phonenumber'];
$ic_no = $_POST['ic_no'];
$address = $_POST['address'];
$gender = $_POST['gender'];
$room_no = $_POST['room_no'];
$date_checkin = $_POST['date_checkin'];
$date_checkout = $_POST['date_checkout'];

// Validate the input values
if (empty($customer_id) || empty($customer_name) || empty($phonenumber) || empty($ic_no) || empty($address) || empty($gender) || empty($room_no) || empty($date_checkin) || empty($date_checkout)) {
  $_SESSION['error'] = "All fields are required";
  header("Location: rent_room.php");
  exit;
}

// Connect to the database
include "koneksi.php";

// Check if the connection is successful
if (!$koneksi) {
  $_SESSION['error'] = "Failed to connect to the database: " . mysqli_connect_error();
  header("Location: rent_room.php");
  exit;
}

// Escape the input values
$customer_id = mysqli_real_escape_string($koneksi, $customer_id);
$customer_name = mysqli_real_escape_string($koneksi, $customer_name);
$phonenumber = mysqli_real_escape_string($koneksi, $phonenumber);
$ic_no = mysqli_real_escape_string($koneksi, $ic_no);
$address = mysqli_real_escape_string($koneksi, $address);
$gender = mysqli_real_escape_string($koneksi, $gender);
$room_no = mysqli_real_escape_string($koneksi, $room_no);
$date_checkin = mysqli_real_escape_string($koneksi, $date_checkin);
$date_checkout = mysqli_real_escape_string($koneksi, $date_checkout);

// Insert the data into the database
$sql = "INSERT INTO bookings (customer_id, customer_name, phonenumber, ic_no, address, gender, room_no, date_checkin, date_checkout, username) VALUES ('$customer_id', '$customer_name', '$phonenumber', '$ic_no', '$address', '$gender', '$room_no', '$date_checkin', '$date_checkout', '$username')";

if (mysqli_query($koneksi, $sql)) {
  $_SESSION['success'] = "Room booked successfully";
  header("Location: rent_room.php");
  exit;
} else {
  $_SESSION['error'] = "Failed to book room: " . mysqli_error($koneksi);
  header("Location: rent_room.php");
  exit;
}

// Close the database connection
mysqli_close($koneksi);
?>
