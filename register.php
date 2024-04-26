<?php
include "package.html";
include "db_connect.php";
include "navbar.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") 
	{
    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
		$username = $_POST["username"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
		$password = $_POST["password"];

    $existSql = "SELECT * FROM `register` WHERE Username = '$username'";
    //$result = mysqli_query($conn, $existSql);
    $numExistRows = mysqli_num_rows(mysqli_query($conn, $existSql));
    if($numExistRows > 2)
    {
      //echo '<script>alert("Username Already Exists !!!!!Plz Try Again...");window.location.href = "register.php";</script>';
      echo "<script>
                    Swal.fire({
                      title: 'error',
                      text: 'Username Already Exists !!!!!Plz Try Again...',
                      icon: 'error',
                      confirmButtonText: 'Try Again'
                    }).then(function() {
                  window.location.href = 'register.php';
                  console.log('The Try Again Button was clicked.');
                  });
               </script>";
    }

		$sql = "INSERT INTO `register`(`Fname`,`Lname`,`Username`,`Email`,`Phone`,`Password`) VALUES ('$fname','$lname','$username', '$email', '$phone','$password')";
    $result = mysqli_query($conn, $sql);
		if ($result) 
		{
        //echo '<script>alert("Registration successful!!!!!Plz Login");window.location.href = "login.php";</script>'; 
        echo "<script>
                Swal.fire({
                  title: 'success',
                  text: 'Registration successful!!!!!Plz Login',
                  icon: 'success',
                  confirmButtonText: 'OK'
                }).then(function() {
              window.location.href = 'login.php';
              console.log('The Ok Button was clicked.');
              });
            </script>"; 
 		} 
 		else 
 		{
 			//echo '<script>alert("Registration Failed!!! Plzz try again......");window.location.href = "register.php";</script>';
       echo "<script>
       Swal.fire({
         title: 'error',
         text: 'Registration Failed!!! Please try again......',
         icon: 'error',
         confirmButtonText: 'Try Again'
       }).then(function() {
     window.location.href = 'register.php';
     console.log('The Try Again Button was clicked.');
     });
  </script>";
		}
	}
  
  
?>


<html>      
    <style>
           @import url(https://fonts.googleapis.com/css?family=Roboto:300);
header .header{
  background-color: #fff;
  height: 45px;
}
header a img{
  width: 134px;
margin-top: 4px;
}
.login-page {
  width: 360px;
  padding: 8% 0 0;
  margin: auto;
}
.login-page .form .login{
  margin-top: -31px;
margin-bottom: 26px;
}
.form {
  position: relative;
  z-index: 1;
  background: #FFFFFF;
  max-width: 360px;
  margin: 0 auto 100px;
  padding: 45px;
  text-align: center;
  box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
}
.form input {
  font-family: "Roboto", sans-serif;
  outline: 0;
  background: #f2f2f2;
  width: 100%;
  border: 0;
  margin: 0 0 15px;
  padding: 15px;
  box-sizing: border-box;
  font-size: 14px;
}
.form button {
  font-family: "Roboto", sans-serif;
  text-transform: uppercase;
  outline: 0;
  background-color:#008000;
  background-image: #008000;
  width: 100%;
  border: 0;
  padding: 15px;
  color: #FFFFFF;
  font-size: 14px;
  -webkit-transition: all 0.3 ease;
  transition: all 0.3 ease;
  cursor: pointer;
}
.form .message {
  margin: 15px 0 0;
  color: #b3b3b3;
  font-size: 12px;
}
.form .message a {
  color: #4CAF50;
  text-decoration: none;
}

.container {
  position: relative;
  z-index: 1;
  max-width: 300px;
  margin: 0 auto;
}

body {
  background-color: #328f8a;
  background-image: url("bg.jpeg");
  font-family: "Roboto", sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
}

    </style>

    <body>

      <div class="login-page">
        <div class="form">
          <div class="login">
            <div class="login-header">
              <p className="h2 text-center white mb-3">Login Here</p>
            </div>
          </div>
          <form class="register" method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
            <input type="text" name="fname" id="fname" placeholder="Enter First Name" required/>
            <input type="text" name="lname" id="lname" placeholder="Enter Last Name" required/>
            <input type="text" name="username" id="username" placeholder="Enter UserName" required/>
            <input type="email" name="email" id="email" placeholder="Enter Email" required/>
            <input type="number" name="phone" id="phone" placeholder="Enter Phone" required/>
            <input type="password" name="password" id="password" placeholder="Enter Password" required/>
 
            <button>Register</button>
          </form>
        </div>
      </div>

      <br><br><hr>
<?php

include "footer.php";

?>
    </body>
</html>