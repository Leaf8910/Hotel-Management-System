<?php
session_start();
$username = $_SESSION['username'];

// if ($_SERVER['REQUEST_METHOD'] == 'POST') {
//   // Get the user-selected check-in and check-out dates
//   $date_checkin = $_POST['date_checkin'];
//   $date_checkout = $_POST['date_checkout'];

//   // Calculate the total cost using the calculateTotalCost function
//   $room_price = 100; // replace with actual room price
//   $total_cost = calculateTotalCost($date_checkin, $date_checkout, $room_price);

//   // Display the total cost to the user
//   echo "Total cost: $".$total_cost;

//   include "../koneksi.php";
// }
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>The Ocean Hotel | Rent ""<?php echo $username ?>"</title>
    <link rel="icon" type="image/x-icon" href="../img/ocean_logo_favicon_2.png">
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  <style>
		/* Style for the popup */
		.popup {
			position: fixed;
			top: 0;
			left: 0;
			width: 100%;
			height: 100%;
			background-color: rgba(0, 0, 0, 0.5);
			z-index: 999;
			display: flex;
			justify-content: center;
			align-items: center;
			opacity: 0;
			pointer-events: none;
			transition: opacity 0.3s ease;
		}
		.popup.active {
			opacity: 1;
			pointer-events: auto;
		}

		/* Style for the form */
		.form {
			background-color: #fff;
			padding: 20px;
			border-radius: 10px;
			box-shadow: 0 0 20px rgba(0, 0, 0, 0.5);
			max-width: 400px;
			width: 100%;
			position: relative;
		}

		/* Style for the close button */
		.close {
			position: absolute;
			top: 10px;
			right: 10px;
			font-size: 20px;
			color: #aaa;
			cursor: pointer;
		}
		.close:hover {
			color: #555;
		}
    .popup.active {
      display: flex;
      justify-content: center;
      align-items: center;
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background-color: rgba(0, 0, 0, 0.1);
      backdrop-filter: blur(10px);
    }

	</style>
  <body style="background-color: antiquewhite">
      
        <!-- navbar -->
        <nav class="navbar navbar-expand-lg navbar-dark text-primary" style="background-color:  #4f2d01;">
            <div class="container">
              <a class="navbar-brand font-leyton" href="index.php">
                <!-- <img src="/img/logo1.png" alt="Logo" width="35" class="d-inline-block align-text-top rounded-circle"> -->
                The Ocean Hotel
              </a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav font-montserrat gap-1">
                  <li class="nav-item">
                    <a class="nav-link" href="index.php">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="leisure.php">Leisure</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="about.php">About Us</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="user_profile.php">User Profile</a>
					
					<li class="nav-item">
                    <a class="nav-link" href="/HMS_databaseFYP2023/receptionist/index.php">Dashboard</a>
                  </li>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link btn btn-primary btn-md active" aria-current="page" href="rent_room.php">Booking</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link btn btn-primary btn-md" href="logout.php">Logout</a>
                  </li>
                </ul>
              </div>
            </div>
          </nav>
        <!--  -->

        <!-- form login -->
        <section>
          <div class="container mt-5">
            <div class=" d-flex align-items-center justify-content-center">
              <div class="card col-md-4 shadow p-2 mb-5 rounded" style="width: auto;">
                <div class="card-body font-montserrat">
                  <h5 class="card-title">Rent Room</h5>
                  <form action="" method="post" class="pt-4">
                    <div class="row gap-5">
                      <div class="col">
                        <div class="mb-3">
                          <label for="customer_id" class="form-label">Customer ID</label>
                          <input type="text" class="form-control" name="customer_id" id="customer_id">
                        </div>
                        <div class="mb-3">
                          <label for="customer_name" class="form-label">Full Name</label>
                          <input type="text" class="form-control" name="customer_name" id="customer_name">
                        </div>
                        <div class="mb-3">
                          <label for="phonenumber" class="form-label">Phone Number</label>
                          <input type="text" class="form-control" name="phonenumber" id="phonenumber">
                        </div>
                        <div class="mb-3">
                          <label for="no_ktp" class="form-label">Identity Card</label>
                          <input type="text" class="form-control" name="ic_no" id="ic_no">
                        </div>
                        <div>
                          <label for="address" class="form-label">Address</label>
                          <textarea class="form-control" id="address" rows="3" name="address"></textarea>
                        </div>
                        <div class="mb-3 row pt-3">
                            <label for="male" class="col">
                              <input type="radio" name="gender" value="male"  id="male">
                              Male
                            </label>
                            <label for="female" class="col">
                              <input type="radio" name="gender" value="female" id="female">
                              Female
                            </label>
                        </div>
                      </div>
                      <div class="col">
                      <div class="mb-3">
                        <label for="room_no" class="form-label">Room Type</label>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="room_no" id="single" value="100">
                          <label class="form-check-label" for="single">
                            Single
                          </label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="room_no" id="double" value="150">
                          <label class="form-check-label" for="double">
                            Double
                          </label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="room_no" id="deluxe" value="200">
                          <label class="form-check-label" for="deluxe">
                            Deluxe
                          </label>
                        </div>
                      </div>
                        <div class="form-group mb-3">
                         <label for="date_checkin">Check-in date:</label>
                         <div class="input-group">
                           <input type="date" id="date_checkin" name="date_checkin" class="form-control rounded" min="<?php echo date('Y-m-d'); ?>">
                         </div>
                        </div>
                       
                        <div class="form-group mb-3">
                          <label for="date_checkout">Check-out date:</label>
                          <div class="input-group">
                            <input type="date" id="date_checkout" name="date_checkout" class="form-control rounded" min="<?php echo date('Y-m-d'); ?>">
                          </div>
                        </div>

                        <div class="form-group mb-3">
                          <label for="total_cost">Total cost:</label>
                          <div class="input-group">
                            <input type="text" id="total_cost" name="total_cost" class="form-control rounded" readonly>
                            <span id="totalCost"></span>
                          </div>
                        </div>

                        <script>
                        function updateTotalCost() {
                          // Get the user-selected check-in and check-out dates
                          var date_checkin = new Date(document.getElementById('date_checkin').value);
                          var date_checkout = new Date(document.getElementById('date_checkout').value);
                                                
                          // Calculate the number of nights between check-in and check-out
                          var num_nights = Math.round((date_checkout - date_checkin) / (1000 * 60 * 60 * 24));
                                                
                          // Retrieve the room price from the database
                          fetch('get_room_price.php')
                            .then(response => response.json())
                            .then(data => {
                              // Calculate the total cost using the room price and number of nights
                              var room_price = data.price;
                              var total_cost = room_price * num_nights;
                            
                              // Update the total cost input with the calculated value
                              document.getElementById('totalCost').value = '$' + total_cost.toFixed(2);
                            })
                            .catch(error => console.error(error));
                          }
                        </script>
                       
                      </div>
                      
                    </div>
                    <button type="button" class="btn btn-primary" onclick="togglePopup()">Pay Now</button>
                    <div class="popup" id="popup">
                  		<div class="form">
                  			<span class="close" onclick="togglePopup()">&times;</span>
                        <img src="https://www.mastercard.us/content/dam/mccom/global/logos/logo-mastercard-mobile.svg" alt="Mastercard logo" width="100">
                  			<h2>Mastercard Form</h2>
                        <form>
                      	  <label for="card-number">Card Number</label>
                      	  <input type="text" id="card-number" name="card-number">

                      	  <label for="expiration-date">Expiration Date</label>
                      	  <input type="text" id="expiration-date" name="expiration-date">

                      	  <label for="cvv">CVV</label>
                      	  <input type="text" id="cvv" name="cvv">

                      	  <label for="name-on-card">Name on Card</label>
                      	  <input type="text" id="name-on-card" name="name-on-card">

                      	  <button id="paybutton" type="button">Pay Now</button>
                        </form>

                  		</div>
                  	</div>
                                          
                  	<script>
                  		function togglePopup() {
                  			const popup = document.getElementById('popup');
                  			popup.classList.toggle('active');
                  		}
                      document.getElementById("paybutton").addEventListener("click", function() {
                          window.location.href = "confirm_booking.php";
                      });
                  	</script>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>