 <?php
include "package.html";
include "db_connect.php";
include "navbar.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
  $username = $_POST["username"];
  $password = $_POST["password"];

  $sql = "SELECT * from register where `Username`='$username' && `Password`='$password'";
  $result = mysqli_query($conn,$sql);
  $num = mysqli_num_rows($result);
      if ($num==1) {
           //echo '<script>alert("Login successful !!!");window.location.href = "home.php";</script>';
           
              $_SESSION['success'] = 'Login successful.... Welcome back!';   
              $_SESSION['loggedin'] = true;
              $_SESSION['username'] = $username;
              if (isset($_SESSION['success'])) {
                  $success_message = $_SESSION['success'];
                  unset($_SESSION['success']);
                  echo "<script>
                  Swal.fire({
                    title: 'success',
                    text: '$success_message',
                    icon: 'success',
                    confirmButtonText: 'OK'
                  }).then(function() {
                window.location.href = 'home.php';
                console.log('The Ok Button was clicked.');
                });
             </script>";
              
                }
            
      } 
      else 
      {
        echo "<script>
                  Swal.fire({
                    title: 'error',
                    text: 'Invalid Credentials!!!!!',
                    icon: 'error',
                    confirmButtonText: 'Try Again'
                  }).then(function() {
                window.location.href = 'login.php';
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
            <input type="text" name="username" id="username" placeholder="Enter Username" required/>
            <input type="password" name="password" id="password" placeholder="Enter Password" required/>
 
            <button>Login</button>
            <p class="message">Not registered? <a href="register.php">Create an account</a></p>
          </form>
        </div>
      </div>
      <br><br><hr>
<?php

include "footer.php";

?>
    </body>
</html>