<?php
include "db_connect.php";
function sendEmail($to_email, $subject, $body, $headers) 
{
    if (mail($to_email, $subject, $body, $headers)) 
    {
        return true;
    }
    else 
    {
        return false;
    }
}
if (isset($_POST['cancel']) && isset($_POST['email'])) 
{
    $to_email = $_POST['email'];
    $subject = "Canceling Your Siamese Cat Adoption Request";
    $body = "Hello Sir/Mam,
                 We are sorry to inform you that your adoption request for siamese cat
                 have been canceled.";
    $headers = "From: townanimal9@gmail.com";
    if (sendEmail($to_email, $subject, $body, $headers)) 
    {
        $sql_select = "SELECT * FROM siamese WHERE Email='$to_email'";
        $result = mysqli_query($conn, $sql_select);

        if ($result && mysqli_num_rows($result) > 0) 
        {
            $row = mysqli_fetch_assoc($result);
            $name = $row['Name'];
            $colour = $row['Colour'];
            $age = $row['Age'];
            $gender = $row['Gender'];
            $city = $row['City'];
            $address = $row['Address'];
            $phone = $row['Phone'];
            $sql_insert = "INSERT INTO cancelreq (Name, Email, Colour, Age, Gender, City, Address, Phone) VALUES ('$name', '$to_email', '$colour', '$age', '$gender', '$city', '$address', '$phone')";
            if (mysqli_query($conn, $sql_insert)) 
            {
                $sql_delete = "DELETE FROM siamese WHERE Email='$to_email'";
                if (mysqli_query($conn, $sql_delete)) 
                {
                    echo '<script>alert("Email sent successfully...");window.location.href = "allcatadopt.php";</script>';
                } 
                else 
                {
                    echo "Error: " . mysqli_error($conn);
                }
            } 
        } 
    } 
    else 
    {
        echo '<script>alert("Email sending....");</script>';
    }
} 
?>
