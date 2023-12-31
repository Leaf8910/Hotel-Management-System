<?php
session_start();
$username = $_SESSION['username'];
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>THE OCEAN HOTEL | Admin "<?php echo $username ?>"</title>
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
            <span class="fs-5 d-none d-sm-inline font-leyton">THE OCEAN HOTEL</span>
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
                    <a class="dropdown-item" href="show_transaksi.php">PAYMENT</a>
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
              <h3 class="fw-light font-montserrat">Admin Workspace | Add Room Data</h3>
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

          <!-- breadcump -->
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb font-montserrat">
              <li class="breadcrumb-item"><a href="show_kamar.php">Room</a></li>
              <li class="breadcrumb-item active" aria-current="page">Add Room Data</li>
            </ol>
          </nav>
          <!--  -->
          
          <!-- content -->
          <main>
          <div class="mt-5 font-montserrat">
              <div class="pb-2">
                <p class="lead fw-semibold">Input Data</p>
              </div>
              <form action="add/add_process_kamar.php" method="post">
                <div class="row mb-3">
                  <label for="room_no" class="col-sm-2 col-form-label">Room Number</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="room_no" name="room_no">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="room_type" class="col-sm-2 col-form-label">Room Type</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="room_type" name="room_type">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="price" class="col-sm-2 col-form-label">Room Price <em>(Bnd.)</em></label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="price" name="price">
                  </div>
                </div>
                <button type="submit" class="btn btn-dark btn-md">Submit</button>
              </form>
            </div>
          </main>
          <!--  -->
				</div>
			</div>
  	</div>
	</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

    <script src="clock.js"></script>
  </body>
</html>