<?php
include "db_connect.php";
include "adminnavbar.php";
$sql = "SELECT * FROM persiancat";
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
			padding: 5px;
			text-align: center;
		}

		td {
			font-weight: lighter;
		}
	</style>
</head>

<body>
	<section>
		<h1>Persian Cat Adopt Requests</h1>
		<table>
			<tr>
				<th>Full Name</th>
				<th>Email</th>
				<th>Cat Colour</th>
				<th>Cat Age</th>
				<th>Cat Gender</th>
				<th>City</th>
				<th>Address</th>
				<th>Phone No</th>
			</tr>
			<?php
				
				while($rows=$result->fetch_assoc())
				{
			?>
			<tr>
				<td><?php echo $rows['Name'];?></td>
				<td><?php echo $rows['Email'];?></td>
				<td><?php echo $rows['Colour'];?></td>
				<td><?php echo $rows['Age'];?></td>
				<td><?php echo $rows['Gender'];?></td>
				<td><?php echo $rows['City'];?></td>
				<td><?php echo $rows['Address'];?></td>
				<td><?php echo $rows['Phone'];?></td>
				<td>
					<input type="submit" onClick="location.href='acceptcat1requestmail.php'" value="Accept">
					<input type="submit" onClick="location.href='cancelcat1requestmail.php'" value="Cancel">
				</td>
			</tr>
			<?php
				}
			?>
		</table>
	</section>
</body>

</html>