<?php
session_start();
$username = $_SESSION['username'];
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>The Ocean Hotel | Leisure "<?php echo $username ?>"</title>
    <link rel="icon" type="image/x-icon" href="../img/ocean_logo_favicon_2.png">
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  <body>
      
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
                    <a class="nav-link active" aria-current="page" href="leisure.php">Leisure</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link"  href="about.php">About Us</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="user_profile.php">User Profile</a>
                  </li>
				  
				  <li class="nav-item">
                    <a class="nav-link" href="/HMS_databaseFYP2023/receptionist/index.php">Dashboard</a>
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

        <header>
          <div class="container pt-5">
            <div class="text-center text-dark font-montserrat">
              <h1 class="display-5">Leisure</h1>
              <p class="lead">More leisure information at The Ocean Hotel</p>
            </div>
          </div>
        </header>

        <section>
          <div class="d-flex justify-content-center pb-5">
            <div id="carouselExampleIndicators" class="carousel slide col-md-8 col-md-offset-2">
              <div class="carousel-indicators ">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4" aria-label="Slide 5"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="5" aria-label="Slide 6"></button>
              </div>
                            <div class="carousel-inner">
                <div class="carousel-item active">
                  <img src="img/swimming.jpg"  class="d-block w-100" alt="...">
                </div>
				
                <div class="carousel-item">
                  <img src="img/gym.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                  <img src="img/bowling.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                  <img src="img/badmintoncourt.jpg" class="d-block w-100" alt="...">
                </div>
               
			   <div class="carousel-item">
                  <img src="img/eventleisure.jpg" class="d-block w-100" alt="...">
                </div>
				
              </div>
              <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </button>
            </div>
          </div>
        </section>

       <!-- description -->
        <section>
          <div class="container">
            <!-- first description -->
            <div class="row justify-content-center fs-5 pt-3 pb-3 gap-3">
              <div class="col-md-5 text-center">
                <img src="img/swimming.jpg" class="rounded img-thumbnail" style="width: 22rem;" alt="">
              </div>
              <div class="col-md-5 d-flex align-items-center">
                <div class="container font-montserrat text-start">
                  <h4>Swimming Pool</h4>
                  <p>
                    From fun with the kids to a leisurely dip, we have a pool for everyone.
                  </p>
                </div>
              </div>
            </div>
            <!--  -->
            <hr>
            <!-- second description -->
            <div class="row justify-content-center fs-5 pt-3 pb-3 gap-3">
              <div class="col-md-5 d-flex align-items-center">
                <div class="container font-montserrat text-end">
                  <h4>Gym</h4>
                  <p>
                    Mixed and ladies-only gyms, featuring strength and cardio zones.
                  </p>
                </div>
              </div>
                <div class="col-md-5 text-center">
                  <img src="img/gym.jpg" class="rounded img-thumbnail" style="width: 22rem;" alt="">
                </div>
            </div>
            <!--  -->
            <hr>
            <!-- third description -->
            <div class="row justify-content-center fs-5 pt-3 pb-3 gap-3">
              <div class="col-md-5 text-center">
                <img src="img/bowling.jpg" class="rounded img-thumbnail" style="width: 22rem;" alt="">
              </div>
              <div class="col-md-5 d-flex align-items-center">
                <div class="container font-montserrat text-start">
                  <h4>Bowling</h4>
                  <p>
                    An eight-lane, 10-pin bowling hall with the latest AMF technology.
                  </p>
                </div>
              </div>
            </div>
            <!--  -->
            <hr>
            <!-- fourth description -->
            <div class="row justify-content-center fs-5 pt-3 pb-3 gap-3">
              <div class="col-md-5 d-flex align-items-center">
                <div class="container font-montserrat text-end">
                  <h4>Bar</h4>
                  <p>
                    A court that meet the requirements of the International Badminton Federation
                  </p>
                </div>
              </div>
              <div class="col-md-5 text-center">
                <img src="img/badmintoncourt.jpg" class="rounded img-thumbnail" style="width: 22rem;" alt="">
              </div>
            </div>
            <!--  -->
            <hr>
			<!-- sixth description -->
            <div class="row justify-content-center fs-5 pt-3 pb-3 gap-3">
              <div class="col-md-5 text-center">
                <img src="img/twin.jpg" class="rounded img-thumbnail" style="width: 22rem;" alt="">
              </div>
              <div class="col-md-5 d-flex align-items-center">
                <div class="container font-montserrat text-start">
                  <h4>Room</h4>
                  <p>
                    The Ocean Hotel has a total of 330 rooms, with a total of 2 different variations. 
                    The rooms at The Ocean Hotel have a Coastal style that matches the feel of the beach where The Ocean Hotel is located. 
                  </p>
                </div>
              </div>
            </div>
			<hr>
			<!-- seventh description -->
            <div class="row justify-content-center fs-5 pt-3 pb-3 gap-3">
              <div class="col-md-5 d-flex align-items-center">
                <div class="container font-montserrat text-end">
                  <h4>Event Hall</h4>
                  <p>
                    We offer the perfect space to suit the scale and theme of your event. 
					Choose from the Arjuna Hall and Serikandi Hall.
                    
                  </p>
                </div>
              </div>
                <div class="col-md-5 text-center">
                  <img src="img/eventleisure.jpg" class="rounded img-thumbnail" style="width: 22rem;" alt="">
                </div>
            </div>
            <!--  -->
          </div>
        </section>
           
    <!-- footer -->
    <footer class="footer mt-5">
      <div class="container-fluid"> 
        <div class="row justify-content-center fs-5 pt-3 gap-3 md-4">
          <div class="col-md-5 text-center">
            <img src="../img/ocean_logo.png" class="rounded img-thumbnail" style="width: 11rem;" alt="">
          </div>
          <div class="col-md-5 d-flex align-items-center md-4">
            <div class="container font-montserrat text-center">
              <div class="text-center">
                <h4>Let's Check</h4>
              </div>
              <div class="row pt-3">
                <ul class="list text-center col">
                  <li class="li-item"><a href="index.php" class="btn btn-dark btn-md">Home</a></li>
                  <li class="li-item"><a href="about.php" class="btn btn-dark btn-md">About Us</a></li>
                  <li class="li-item"><a href="leisure.php" class="btn btn-dark btn-md">Leisure</a></li>
                </ul>
                <ul class="list text-center col">
                  <li class="li-item"><a href="user_profile.php" class="btn btn-dark btn-md">User Profile</a></li>
                  <li class="li-item"><a href="rent_room.php" class="btn btn-dark btn-md">Booking</a></li>
                  <li class="li-item"><a href="logout.php" class="btn btn-dark btn-md">Logout</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <!--  -->
      
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>