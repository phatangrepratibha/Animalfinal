<?php
include "db_connect.php";
$sql = "SELECT email FROM eskimo";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) 
{
  while($row = mysqli_fetch_assoc($result)) 
  {
    $to_email = $row["email"];
    $subject = "Canceling Your American Eskimo Dog Adopt Request";
    $body = "Hello Sir/Mam,
                 We are sorry to inform you that your adoption request for american eskimo dog
                 have been canceled.";
    $headers = "From: deoguneprajakta@gmail.com";

        if (mail($to_email, $subject, $body, $headers)) 
        {
            echo '<script>alert("Email successfully sent...");window.location.href = "alldogadopt.php";</script>';
        } 
        else 
        {
            echo '<script>alert("Email sending failed...");</script>';
        }
    }
}
?>