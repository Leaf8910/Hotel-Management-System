<?php
// Retrieve the room price from the database
$sql = "SELECT price FROM room WHERE room_no = 1"; // Replace "1" with the actual ID of the room you want to rent
$result = $koneksi->query($sql);

// Check if the query was successful
if ($result->num_rows > 0) {
  // Retrieve the room price from the query result
  $row = $result->fetch_assoc();
  $price = $row['price'];

  // Return the room price as a JSON object
  header('Content-Type: application/json');
  echo json_encode(['price' => $price]);
} else {
  // Handle the case where no room price was found
  $room_price = 0;
}
  
// Close the database connection
$koneksi->close();
?>
