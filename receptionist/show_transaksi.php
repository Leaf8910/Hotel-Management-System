<?php
session_start();
$username = $_SESSION['username'];

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>The Ocean Hotel | Receptionist "<?php echo $username ?>"</title>
    <link rel="icon" type="image/x-icon" href="../img/Arjuna_logo_favicon_2.png">
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
								<a class="nav-link align-middle p-2 btn btn-dark btn-md" href="index.php">
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
											<a class="dropdown-item" href="show_detail.php">Payment Details</a>
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
						
						<!-- header page -->
						<header class="mt-4 row">
							<div class="col">
								<h3 class="fw-light font-montserrat">Receptionist Workspace | Payment</h3>
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
								<li class="breadcrumb-item active" aria-current="page">Payment</li>
							</ol>
						</nav>
						<!--  -->

						<!-- Content -->
						<main class="mt-3">
							<!-- add data -->
							<section>
								<a href="add_transaksi.php" class="btn btn-dark btn-md font-montserrat">Add Data</a>
							</section>
							<!--  -->

							<section class="mt-4">
										<form action="" method="post">
											<div class="d-flex align-items-center flex-wrap gap-2 font-montserrat">
												<div class="">
													<label for="">Search based</label>
												</div>
												<div class="">
													<select name="choose" id="search" class="btn btn-dark btn-md">
														<option value="">------</option>
														<option value="payment_no">Payment No</option>
														<option value="customer_id">Customer ID</option>
														<option value="employee_id">Employee ID</option>
														<option value="total_room">Number of Room</option>
														<option value="date_checkin">Date Check-In</option>
														<option value="date_checkout">Date Check-Out</option>
														<option value="durationofstay">Duration of Stay <em>(Day)</em></option>
														<option value="total_price">Total Payment</option>
													</select>
												</div>
												<div class="">
													<input type="text" name="searchtext" class="form-control-sm">
												</div>
												<div class="">
													<input type="submit" name="search" value="Search" class="btn btn-dark btn-md">	
												</div>
												<div class="">
													<input type="submit" name="all" value="Show All" class="btn btn-dark btn-md">
												</div>
											</div>
										</form>
							</section>

							<!-- Table -->
							<section class="table-responsive-md font-montserrat mt-4">
								<table class="table table-striped text-center">
									<thead>
										<tr>
											<th scope="col" class="fst-italic fw-normal">No</th>
											<th scope="col" class="fst-italic fw-normal">Payment No</th>
											<th scope="col" class="fst-italic fw-normal">Customer ID</th>
											<th scope="col" class="fst-italic fw-normal">Employee ID</th>
											<th scope="col" class="fst-italic fw-normal">Number of Room</th>
											<th scope="col" class="fst-italic fw-normal">Date Check-In</th>
											<th scope="col" class="fst-italic fw-normal">Date Check-Out</th>
											<th scope="col" class="fst-italic fw-normal">Duration of Stay <em>(Day)</em></th>
											<th scope="col" class="fst-italic fw-normal">Total Payment</th>
											<th scope="col" class="fst-italic fw-normal">Payment Details</th>
											<th scope="col" colspan="2" class="fst-italic fw-normal">Option</th>
										</tr>
									</thead>
									<tbody>
										<!-- php search -->
										<?php
										include '../koneksi.php';
										$input_payment = "";
										if (isset($_POST['search'])) {
											$option = $_POST['choose'];
											$data_name = $_POST['searchtext'];
											$input_payment = mysqli_query($koneksi, "SELECT * FROM payment WHERE $option LIKE '%$data_name%'");
										}
										else{
											$input_payment = mysqli_query($koneksi, "SELECT * FROM payment");
										}
										?>
										<!--  -->

										<!-- php dynamic table -->
										<?php

										include "../koneksi.php";
										$no = 1;
										foreach ($input_payment as $row) {
											echo "<tr>
															<td>$no</td>
															<td>" . $row['payment_no'] . "</td>
															<td>" . $row['customer_id'] . "</td>
															<td>" . $row['employee_id'] . "</td>
															<td>" . $row['total_room'] . "</td>
															<td>" . $row['date_checkin'] . "</td>
															<td>" . $row['date_checkout'] . "</td>
															<td>" . $row['durationofstay'] . "</td>
															<td>" . $row['total_price'] . "</td>
															<td>
																	<a href='detail_page.php?payment_no=$row[payment_no]' class='btn btn-dark btn-md'>Detail</a>
															</td>
															<td>
																	<a href='update_transaksi.php?payment_no=$row[payment_no]' class='btn btn-dark btn-md'>Update</a>
															</td>
															<td>
																	<a href='delete/delete_transaksi.php?payment_no=$row[payment_no]' class='btn btn-dark btn-md'>Delete</a>
															</td>
														</tr>";
											$no++;
										}
										
										?>
										<!--  -->
									</tbody>
								</table>
							</section>
							<!--  -->

						</main>
						<!--  -->

					</div>
				</div>
			</div>
		</div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

		<!-- personal JS -->
		<script src="clock.js"></script>
  </body>
</html>