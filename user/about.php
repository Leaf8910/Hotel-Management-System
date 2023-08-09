<?php
session_start();
$username = $_SESSION['username'];
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>The Ocean Hotel | About Us "<?php echo $username ?>"</title>
    <link rel="icon" type="image/x-icon" href="../img/ocean_logo_favicon_2.png">
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  <body>
      
      <!-- header offers -->
      <header class="container-fluid bg-color">
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
                    <a class="nav-link" href="index.php">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="leisure.php">Leisure</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="about.php">About Us</a>
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

        <!-- offeres wording -->
        <section class="container header">
          <div class="text-center font-montserrat" style="padding-bottom: 6rem; color: var(--bs-light);">
            <h1 class="display-5">About Us</h1>
            <p class="lead">More information about The Ocean Hotel</p>
          </div>
        </section>
        <!--  -->
      </header>
    <!--  -->

    <!-- about us-->
    <section>
      <div class="container pt-5 pb-5">
        <div class="row justify-content-sm-evenly">
          <div class="col-md-4 font-montserrat mb-4" style="width: 20rem;">
            <div id="list-example" class="list-group text-center">
              <a class="list-group-item list-group-item-action" href="#list-item-1">What is The Ocean Hotel ?</a>
              <a class="list-group-item list-group-item-action" href="#list-item-2">How is the staff management at The Ocean Hotel ?</a>
              <a class="list-group-item list-group-item-action" href="#list-item-3">What are the leisure offered by The Ocean Hotel ?</a>
            </div>
          </div>
          <div class="col-md-7 font-montserrat rounded" style="background-color: antiquewhite;">
            <div data-bs-spy="scroll" data-bs-target="#list-example" data-bs-smooth-scroll="true" class="scrollspy-example p-4" tabindex="0">
              <h4 id="list-item-1">What is The Ocean Hotel ?</h4>
              <p>
                The Ocean Hotel is a beachside resort managed by The Ocean's Property. 
                The Ocean Hotel presents a comfortable, fantastic, extraordinary getaway, 
                and of course the serenity of the beach that eliminates the fatigue of everyday life.
              </p>
              <p>
                The construction of The Ocean Hotel began on June 15, 2010, by The Ocean's Property, 
                and was completed on May 20, 2015. The construction of the The Ocean Hotel took 5 years, and 2 months after that, on July 3, 2015
                The Ocean Hotel was inaugurated.
              </p>
              <h4 id="list-item-2">How is the staff management at The Ocean Hotel ?</h4>
              <p>
                The Ocean Hotel has 250 professional staff in their respective fields.
                Our staff consists of two sectors, namely the service sector and administration. For the service sector, it consists of receptionists, Porters, Concierge, 
                Housekeeping, Room Service, Waiters, Kitchen Staff, 
                Supervisor of Guest Service, Front Desk Supervisor,
                Housekeeping Supervisor, Kitchen Manager, Restaurant Manager, Executive Chefs, 
                and all the total staff for service there are 187 staff.
              </p>
              <p>
                For the Administration Sector we have Marketing and advertising, 
                Accountants, Purchasing, Event Planners, Hotel Manager Assistants, Hotel Managers, 
                and a total of 63 staff for the administration sector.
              </p>
              <h4 id="list-item-3">What are the leisure offered by The Ocean Hotel ?</h4>
              <p>
                The Ocean Hotel has 330 rooms. From 330 rooms we have 2 different variants. 
                Not only our rooms also have supporting leisure such as swimming pool, gym, and etc.
              </p>
              <p>
                For more information about the leisure available at The Ocean Hotel, 
                you can visit our leisure page below.
              </p>
              <div class="btn btn-dark btn-md mt-2">
                <a href="leisure.php" style="text-decoration: none; color: inherit;">More Leisure</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    
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