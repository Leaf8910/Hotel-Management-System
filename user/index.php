<?php
session_start();
$username = $_SESSION['username'];
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>The Ocean Hotel | <?php echo $username ?></title>
    <link rel="icon" type="image/x-icon" media="all" href="../img/ocean_logo_favicon_2.png">
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  <body>
      
      <!-- header -->
      <header class="container-fluid bg-image">
        <!-- navbar -->
        <nav class="navbar navbar-expand-lg navbar-dark glass rounded text-primary">
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
                    <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="leisure.php">Leisure</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="about.php">About Us</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="user_profile.php">User Profile</a>
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

        <!-- offers -->
        <section class="container header">
          <div class="text-center font-montserrat" style="color: var(--bs-light);">
            <h1 class="display-5">Don't Have a Good Holiday, Have a Great Holiday</h1>
            <p class="lead">Welcome <strong><?php echo $username ?></strong>, let's look some Special Offer</p>
            <div class="btn btn-primary btn-lg mt-2">
              <a href="#offer" style="text-decoration: none; color: inherit;">Let's Look</a>
            </div>
          </div>
        </section>
        <!--  -->
      </header>
    <!--  -->

    <!-- About Us -->
    <section class="bg-image-content-1">
      <div class="container-fluid" style="padding: 7rem;"> 
        <div class="row text-center">
          <div class="col">
            <h2 class="font-leyton">The Ocean Hotel</h2>
          </div>
        <div class="row justify-content-center fs-5 pt-5 gap-3">
          <div class="col-md-5">
            <img src="../img/ocean_logo.png" class="rounded img-thumbnail" style="width: 22rem;" alt="">
          </div>
          <div class="col-md-5 d-flex align-items-center">
            <div class="container font-montserrat text-start">
              <h4>About Us</h4>
              <p>The Ocean Hotel is a beachside resort managed by The Ocean's Property. The Ocean Hotel presents a comfortable, fantastic, extraordinary getaway, and of course the serenity of the beach that eliminates the fatigue of everyday life. If you want to know more about The Ocean Hotel, Visit About Us page</p>
              <div class="btn btn-dark btn-md mt-2">
                <a href="about.php" style="text-decoration: none; color: inherit;">More from Us</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--  -->

    <!-- room offers -->
    <section class="bg-image-content-2">
      <div class="container-fluid font-montserrat" style="padding: 5rem 0 8rem 0;">
        <div class="row text-center">
          <div class="col">
            <h2 class="font-leyton" id="offer">Special Offer</h2>
            <p class="lead pt-1">Special offer for <strong><?php echo $username ?></strong></p>
          </div>
        </div>
        <div class="row row-cols-1 row-cols-md-2 g-4 justify-content-center column-gap-4 pt-3">
          <div class="card" style="width: 18rem;">
            <img src="../img/twin.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Double Room</h5>
              <p class="card-text">Our new double rooms combines comfort and classy style and decorated to a high standard with warm earthy tones creating an easy & relax...</p>
              <p class="card-text"><del>BND 200.00</del>, <strong>BND 150.00</strong></p>
              <a href="rent_room.php" class="btn btn-dark">Book</a>
            </div>
          </div>
          <div class="card" style="width: 18rem;">
            <img src="../img/single.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Single Room</h5>
              <p class="card-text">Our immaculately designed single rooms are beautiful, serene and sophisticated. Relax and make yourself at home with the premium amenities...</p>
              <p class="card-text"><del>BND 150.00</del>, <strong>BND 90.00</strong></p>
              <a href="rent_room.php" class="btn btn-dark">Book</a>
            </div>
          </div>
          
        </div>
      </div>
    </section>
    <!--  -->

    <!-- footer -->
    <footer class="footer">
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
                  <li class="li-item"><a href="rent_room.php" class="btn btn-dark btn-md">Book</a></li>
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
