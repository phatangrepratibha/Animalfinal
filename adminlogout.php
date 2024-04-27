<?php
include "adminnavbar.php";
session_start();
unset($_SESSION['adminloggedin']);
unset( $_SESSION['adminusername']);
header("Location:home.php");
?>