<?php
	session_start();
	if(!isset($_SESSION['loggedinuser']))
	{
		header("Location:login.php");
	}
?>
<html>
	<title></title>
	<head>
		<script></script>
	</head>
	<body style="background-color: green;">
		<?php
			require "../controller/room_controller.php";
			$rooms = rooms();
		?>
		<center>
			<font id="msg" size="2" style="color: red;"></font>
			
				<table>
					<tr>
						<td>Room Number <input type="text" name="rn" id="rn"><br></td>
					</tr>
				</table>
				<br>
				<input type="button" name="remove" value="Remove" onclick="remove()">
				<br><br>
				<table width="500px" align="center" border="1" style="border-collapse: collapse; text-align: center;">
				<tr>
					<th>Room Number</th>
					<th>Room Type</th>
					<th>Status</th>
				</tr>
				<?php
					foreach ($rooms as $room)
					{
						echo "<tr>";
						echo "<td>".$room["room_number"]."</td>";
						echo "<td>".$room["type"]."</td>";
						echo "<td>".$room["status"]."</td>";
						echo "</tr>";
					}
				?>
			</table>
			
		</center>
	</body>
</html>