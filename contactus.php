<?php
 include "adminnavbar.php";
include "db_connect.php";

$sql = "SELECT * FROM contactform";
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
		<h1>Contact Us Form Details</h1>
		<table>
			<tr>
                <th>Full Name</th>
				<th>Email</th>
				<th>Phone</th>
				<th>Address</th>
				<th>City</th>
				<th>Pincode</th>
                <th>Subject</th>
				<th>Message</th>
				
			</tr>
			<?php
				
				while($rows=$result->fetch_assoc())
				{
			?>
			<tr>
                <td><?php echo $rows['FullName'];?></td>
                <td><?php echo $rows['Email'];?></td>
				<td><?php echo $rows['Phone'];?></td>
				<td><?php echo $rows['Address'];?></td>
                <td><?php echo $rows['City'];?></td>
				<td><?php echo $rows['Pincode'];?></td>
				<td><?php echo $rows['Subject'];?></td>
				<td><?php echo $rows['Msg'];?></td>
				
			</tr>
			<?php
				}
			?>
		</table>
	</section>
</body>

</html>
