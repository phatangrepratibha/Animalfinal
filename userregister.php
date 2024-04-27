<?php
 include "adminnavbar.php";
include "db_connect.php";

$sql = "SELECT * FROM register";
$result = $conn->query($sql);

?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<style>
		table {
			margin: 0 auto;
			font-size: large;
			border: 1px solid black;
		}

		h1 {
			text-align: center;
			color: #000000;
			font-size: xx-large;
			font-family: 'Gill Sans', 'Gill Sans MT',
			' Calibri', 'Trebuchet MS', 'sans-serif';
		}

		td {
			background-color:  #d9b3ff;
			border: 1px solid black;
		}

		th,
		td {
			font-weight: bold;
			border: 1px solid black;
			padding: 10px;
			text-align: center;
		}

		td {
			font-weight: lighter;
		}
	</style>
</head>

<body>
	<section>
        <br>
        <br>
		<h1>Registered User's</h1>
		<table>
			<tr>
                <th>First Name</th>
                <th>Last Name</th>
				<th>Username</th>
				<th>Email</th>
                <th>Phone</th>
				<th>Password</th>
				
			</tr>
			<?php
				
				while($rows=$result->fetch_assoc())
				{
			?>
			<tr>
                <td><?php echo $rows['Fname'];?></td>
                <td><?php echo $rows['Lname'];?></td>
				<td><?php echo $rows['Username'];?></td>
				<td><?php echo $rows['Email'];?></td>
                <td><?php echo $rows['Phone'];?></td>
				<td><?php echo $rows['Password'];?></td>
				
			</tr>
			<?php
				}
			?>
		</table>
	</section>
</body>

</html>
