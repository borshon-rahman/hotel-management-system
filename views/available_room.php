<html>
	<title></title>
	<head></head>
	<body>
		<?php
		require "../controller/room_controller.php";
		$rooms = available_room();
		?>
		<div>
			<h2 style="text-align: center;">Available Room</h2>
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
		</div>
	</body>
</html>