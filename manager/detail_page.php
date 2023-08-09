<?php
session_start();
$username = $_SESSION['username'];

// GET PULL
$no = $_GET['payment_no'];
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>The Ocean Hotel | Receptionist "<?php echo $username ?>"</title>
    <link rel="icon" type="image/x-icon" href="../img/ocean_logo_favicon_2.png">
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  <body>

	<div>
    <div class="row flex-nowrap gap-4">
      <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 text-primary" style="background-color: #4f2d01;">
        <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-4 gap-3 text-white min-vh-100">
          <a href="index.php" class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-white text-decoration-none">
            <span class="fs-5 d-none d-sm-inline font-leyton">The Ocean Hotel</span>
          </a>
          <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start font-montserrat" id="menu">
            <li class="nav-item">
              <a class="nav-link align-middle p-2 btn btn-dark btn-md active" href="index.php" aria-current="page">
                <i class="bi bi-house fs-4"></i>
                <span class="ms-1 d-none d-sm-inline">Home</span>
              </a>
            </li>
            <li class="nav-item">
              <div class="dropdown">
                <a class="btn btn-dark btn-md dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  <i class="fs-4 bi bi-credit-card"></i> 
                  <span class="ms-1 d-none d-sm-inline">Option</span>
                </a>

                <ul class="dropdown-menu dropdown-menu-light text-small shadow" style="background-color: antiquewhite;">
                  <li>
                    <a class="dropdown-item" href="show_transaksi.php">Payment</a>
                  </li>
                  <li>
                    <hr class="dropdown-divider">
                  </li>
                  <li>
                    <a class="dropdown-item" href="show_detail.php">Payment Detail</a>
                  </li>
                </ul>
              </div>
            </li>
            <li class="nav-item">
              <a href="show_pengunjung.php" class="nav-link align-middle p-2 btn btn-dark btn-md">
                <i class="fs-4 bi bi-file-person"></i> 
                <span class="ms-1 d-none d-sm-inline">Customer</span>
              </a>
            </li>
            <li class="nav-item">
              <a href="show_karyawan.php" class="nav-link align-middle p-2 btn btn-dark btn-md">
                <i class="fs-4 bi bi-person-workspace"></i> 
                <span class="ms-1 d-none d-sm-inline">Employee</span>
              </a>
            </li>
            <li class="nav-item">
              <a href="show_kamar.php" class="nav-link align-middle p-2 btn btn-dark btn-md">
                <i class="fs-4 bi bi-houses"></i> 
                <span class="ms-1 d-none d-sm-inline">Room</span> 
              </a>
            </li>
            <li class="nav-item">
              <a href="show_website_user.php" class="nav-link align-middle p-2 btn btn-dark btn-md">
                <i class="fs-4 bi bi-person-circle"></i> 
                <span class="ms-1 d-none d-sm-inline">Website User</span> 
              </a>
            </li>
          </ul>
          <hr>
          <div class="dropdown pb-4 font-montserrat">
            <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
							<img src="../img/user.png" alt="hugenerd" width="30" height="30" class="rounded-circle">
							<span class="d-none d-sm-inline mx-1"><?php echo $username?></span>
            </a>
            <ul class="dropdown-menu dropdown-menu-light text-small shadow" style="background-color: antiquewhite;">
              <li>
								<a class="dropdown-item" href="admin_profile.php">Profile</a>
							</li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li>
								<a class="dropdown-item" href="logout.php">Logout</a>
							</li>
            </ul>
          </div>
        </div>
      </div>
			<div class="col py-3 ml-2">
				<div class="container">

          <!-- header -->
          <header class="mt-4 row">
            <div class="col">
              <h3 class="fw-light font-montserrat">The Ocean Hotel | Payment Details Page</h3>
            </div>
            <div class="col d-flex justify-content-end align-items-center">
              <div class="font-montserrat">
                <div id="hari"></div>
                <div id="clock"></div>
              </div>
            </div>
          </header>
          <!--  -->

          <hr>

					<!-- breadcrump -->
					<nav aria-label="breadcrumb">
            <ol class="breadcrumb font-montserrat">
              <li class="breadcrumb-item"><a href="show_transaksi.php">Payment</a></li>
              <li class="breadcrumb-item active" aria-current="page">Payment Details <strong><?php echo $no ?></strong> </li>
            </ol>
          </nav>
					<!--  -->

          <?php
          include "../koneksi.php";
          $input_payment = $_GET['payment_no'];

          // table detail_transaksi
          $query_detail = mysqli_query($koneksi, "SELECT * FROM payment_detail WHERE payment_no = '$input_payment'");
          $data_detail = mysqli_fetch_array($query_detail);

          // table transaksi
          $query_payment = mysqli_query($koneksi, "SELECT * FROM payment WHERE payment_no = '$input_payment'");
          $data_payment = mysqli_fetch_array($query_payment);

          // table penggunjung
          $query_customer = mysqli_query($koneksi, "SELECT * FROM customer WHERE customer_id = '$data_payment[customer_id]'");
          $data_customer = mysqli_fetch_array($query_customer);
          ?>

          <!-- content -->
          <main class="mt-5">
            <div class="card text-center font-montserrat">
              <div class="card-header" style="background-color:antiquewhite">
                <h5 class="fw-normal mb-0">
                  Transaksi <strong><?php echo $no ?></strong>
                </h5>
              </div>
              <div class="card-body">
                <div class="row gap-3 text-center pt-2 justify-content-center">
                  <div class="col-md-4 rounded p-3">
                    <h6 class="mb-1 mt-2 fw-normal">Nama of Order</h6>
                    <hr>
                    <p class="mb-0">
                      <?php echo $data_customer['customer_name'] ?>
                    </p>
                  </div>
                </div>
                <div class="row gap-3 text-center pt-4 justify-content-center">
                  <div class="col-md-4 rounded p-3">
                    <h6 class="mb-1 mt-2 fw-normal">Payment Details ID</h6>
                    <hr>
                    <p class="mb-0">
                      <?php echo $data_detail['payment_detail_id']?>
                    </p>
                  </div>
                  <div class="col-md-4 rounded p-3">
                    <h6 class="mb-1 mt-2 fw-normal">Payment No</h6>
                    <hr>
                    <p class="mb-0">
                    <?php echo $data_detail['payment_no']?>
                    </p>
                  </div>
                </div>
                <div class="row gap-3 text-center pt-4 justify-content-center">
                  <div class="col-md-4 rounded p-3">
                    <h6 class="mb-1 mt-2 fw-normal">Room No</h6>
                    <hr>
                    <p class="mb-0">
                      <?php echo $data_detail['no_kamar']?>
                    </p>
                  </div>
                  <div class="col-md-4 rounded p-3">
                    <h6 class="mb-1 mt-2 fw-normal">Number of Rooms</h6>
                    <hr>
                    <p class="mb-0">
                      <?php echo $data_payment['total_room'] ?>
                    </p>
                  </div>
                </div>
                <div class="row gap-3 text-center pt-4 justify-content-center">
                  <div class="col-md-4 rounded p-3">
                    <h6 class="mb-1 mt-2 fw-normal">Total Price</h6>
                    <hr>
                    <p class="mb-0">Rp. 
                      <?php echo $data_payment['total_price'] ?>
                    </p>
                  </div>
                </div>
                <div class="row gap-3 text-center pt-4 justify-content-center">
                  <div class="col-md-4 rounded p-3">
                    <h6 class="mb-1 mt-2 fw-normal">Date Check-In</h6>
                    <hr>
                    <p class="mb-0">
                      <?php echo $data_payment['date_checkin']?>
                    </p>
                  </div>
                  <div class="col-md-4 rounded p-3">
                    <h6 class="mb-1 mt-2 fw-normal">Date Check-Out</h6>
                    <hr>
                    <p class="mb-0">
                      <?php echo $data_payment['date_checkout'] ?>
                    </p>
                  </div>
                </div>
                <div class="row gap-3 text-center pt-4 justify-content-center">
                  <div class="col-md-4 rounded p-3">
                    <h6 class="mb-1 mt-2 fw-normal">Phone Number</h6>
                    <hr>
                    <p class="mb-0">
                      <?php echo $data_customer['phonenumber']?>
                    </p>
                  </div>
                  <div class="col-md-4 rounded p-3">
                    <h6 class="mb-1 mt-2 fw-normal">IC No</h6>
                    <hr>
                    <p class="mb-0">
                      <?php echo $data_customer['ic_no'] ?>
                    </p>
                  </div>
                </div>
                <div class="row gap-3 text-center pt-4 justify-content-center">
                  <div class="col-md-4 rounded p-3">
                    <h6 class="mb-1 mt-2 fw-normal">Gender</h6>
                    <hr>
                    <p class="mb-0">
                      <?php echo $data_customer['gender'] ?>
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </main>
          <!--  -->
				</div>
			</div>
  	</div>
	</div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>