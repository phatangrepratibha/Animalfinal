<?php
include "navbar.php";
if  ($_SESSION['loggedin']!=true)
{
    echo '<script>alert("Plzz Login!!!!");window.location.href = "login.php";</script>';
}
?>
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

        <title>Petlor</title>

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
      <br>
      <br>
      <div>
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="card" style="width: 20rem;">
                          <img src="images/cat.jpg" height="350px" class="card-img-top" alt="...">
                           <div class="card-body">
                             <h5 class="card-title">CAT</h5>
                              <a href="catadopt.php" class="btn btn-success">See More Details</a>
                            </div>
                    </div>

                </div>

                <div class="col">
                    <div class="card" style="width: 20rem;">
                          <img src="images/dd.jpg" height="350px" class="card-img-top" alt="...">
                           <div class="card-body">
                             <h5 class="card-title">DOG</h5>
                              <a href="dogadopt.php" class="btn btn-success">See More Details</a>
                            </div>
                    </div>

                </div>

                <div class="col">
                    <div class="card" style="width: 20rem;">
                          <img src="images/co.jpg"height="350px"  class="card-img-top" alt="...">
                           <div class="card-body">
                             <h5 class="card-title">COW</h5>
                              <a href="cowadopt.php" class="btn btn-success">See More Details</a>
                            </div>
                    </div>

                </div>
           </div>

           <div class="row mt-5">
                <div class="col">
                    <div class="card" style="width: 20rem;">
                          <img src="images/bi.jpg "height="350px" class="card-img-top" alt="...">
                           <div class="card-body">
                             <h5 class="card-title">BIRDS</h5>
                              <a href="birdadopt.php" class="btn btn-success">See More Details</a>
                            </div>
                    </div>

                </div>

                <div class="col">
                    <div class="card" style="width: 20rem;">
                          <img src="images/go.jpg" height="350px"class="card-img-top" alt="...">
                           <div class="card-body">
                             <h5 class="card-title">GOAT</h5>
                              <a href="goatadopt.php" class="btn btn-success">See More Details</a>
                            </div>
                    </div>

                </div>

                <div class="col">
                    <div class="card" style="width: 20rem;">
                          <img src="images/a.jpg" height="350px" class="card-img-top" alt="...">
                           <div class="card-body">
                             <h5 class="card-title">RABBIT</h5>
                              <a href="rabbitadopt.php" class="btn btn-success">See More Details</a>
                            </div>
                    </div>

                </div>
           </div>


     </div>
</div>
<br>
<br>
<br>
</body>
</html>
<?php
 include "footer.php";
?> 