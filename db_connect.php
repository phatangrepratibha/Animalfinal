<?php
	$conn = mysqli_connect("localhost", "root","", "AnimalFinal");
	if (!$conn) 
	{
		echo("Connection failed: " . mysqli_connect_error());
	}
?>