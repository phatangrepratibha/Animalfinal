<?php
include "db_connect.php";
$sql = "SELECT email FROM britishcat";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) 
{
  while($row = mysqli_fetch_assoc($result)) 
  {
    $to_email = $row["email"];
    $subject = "Accepting the British Shorthair Cat Adoption Request";
    $body = "Hello Sir/Mam,
                 We are greatful to inform you that your adoption request of british shorthair cat
                 have been confirmed. We will contact you very soon for further Details. ";
    $headers = "From: deoguneprajakta@gmail.com";

        if (mail($to_email, $subject, $body, $headers)) 
        {
            echo '<script>alert("Email successfully sent...");window.location.href = "allcatadopt.php";</script>';
        } 
        else 
        {
            echo '<script>alert("Email sending failed...");</script>';
        }
    }
}
?>