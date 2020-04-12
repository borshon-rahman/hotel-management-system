<html>
	<title></title>
	<head></head>
	<body>
		<?php
		require "../controller/room_controller.php";
		$rooms = available_room();
		?>
		<div>
			<h3 style="text-align: center;">Available Room</h3>
			<table align="center" border="1" style="border-collapse: collapse;">
				<tr>
					<th>Room Number</th>
					<th>Room Type</th>
					<th>Status</th>
					<th></th>
					<th></th>
				</tr>
				<?php
					foreach ($rooms as $room)
					{
						echo "<tr>";
						echo "<td>".$room["room_number"]."</td>";
						echo "<td>".$room["type"]."</td>";
						echo "<td>".$room["status"]."</td>";
						echo "<td>"."<button>Button</button>"."</td>";
						echo "<td>"."<button>Button</button>"."</td>";
						echo "</tr>";
					}
				?>
			</table>
		</div>
	</body>
</html>