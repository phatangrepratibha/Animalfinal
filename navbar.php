<?php
session_start();
if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true)
{
  $loggedin = true;
}
else{
  $loggedin = false;
}
if(isset($_SESSION['adminloggedin']) && $_SESSION['adminloggedin']==true)
{
   $adminloggedin= true;
}
else{

  $adminloggedin =false;
}
echo'
<html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <!-- Mobile Metas -->
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
        <!-- Site Metas -->
        <meta name="keywords" content="" />
        <meta name="description" content="" />
        <meta name="author" content="" />

        <title>AnimalTown</title>

        <!-- font awesome style -->
        <link href="font-awesome.min.css" rel="stylesheet" />
        <!-- lightbox -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.css" rel="stylesheet" />
        <!-- bootstrap core css -->
        <link rel="stylesheet" type="text/css" href="bootstrap.css" />

        <!-- fonts style -->
        <link href="https://fonts.googleapis.com/css?family=Lato:400,700|Poppins:400,700|Roboto:400,700&display=swap" rel="stylesheet" />

        <!-- Custom styles for this template -->
        <link href="style.css" rel="stylesheet" />
        <!-- responsive style -->
        <link href="responsive.css" rel="stylesheet" />
    </head>
    <body>
    <nav class="navbar navbar-expand-lg custom_nav-container ">
        <a class="navbar-brand" href="index.html">
        <img src="images/logo.png" alt="" />
        <span>
            AnimalTown
        </span>
        </a>

        <!-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class=""> </span>
        </button> -->

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ">
            <li class="nav-item active">
            <a class="nav-link" href="home.php"> Home </a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="about.php"> About Us </a>
            </li>
            <li class="nav-item">
            <a class="nav-link " href="card.php"> Animals </a>
            </li>
            <li class="nav-item">
            <a class="nav-link pr-lg-0" href="contact.php"> Contact us</a>
            </li>
        </ul>
            <ul class="navbar-nav ms-auto">
            <li class="nav-item ">';
            if(!$loggedin)
            {
              echo'
            <a class="btn btn-dark" href="login.php">Login</a>
            <a class="btn btn-dark" href="register.php">Register</a>';
            }
            if($loggedin)
            {
              echo'
              <a class="btn btn-dark" href="logout.php">Log Out</a>';
            }
            echo'
        </ul>
        </div>
    </nav>
    </body>
</html>';
?>