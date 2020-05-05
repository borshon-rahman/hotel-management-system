<html>
	<title></title>
	<head></head>
	<body>
		<?php
		require "../controller/room_controller.php";
		$reservations = reserved_room();
		?>
		<div>
			<h2 style="text-align: center;">Reserved Room</h2>
			<table align="center" border="1" style="border-collapse: collapse; text-align: center;">
				<tr>
					<th>Room Number</th>
					<th>Room Type</th>
					<th colspan="2">Name</th>
					<th>Email</th>
					<th>Country</th>
					<th>Phone</th>
					<th>Bedding Type</th>
					<th>Meal Plan</th>
					<th colspan="3">Checkin Date</th>
					<th></th>
					<th colspan="3">Checkout Date</th>
					<th></th>
					
				</tr>
				<?php
					$rn = "";
					foreach ($reservations as $reservation)
					{
						echo "<tr>";
						echo "<td>".$reservation["room_number"]."</td>";
						echo "<td>".$reservation["room_type"]."</td>";
						echo "<td>".$reservation["fname"]."</td>";
						echo "<td>".$reservation["lname"]."</td>";
						echo "<td>".$reservation["email"]."</td>";
						echo "<td>".$reservation["country"]."</td>";
						echo "<td>".$reservation["phone"]."</td>";
						echo "<td>".$reservation["bedding_type"]."</td>";
						echo "<td>".$reservation["meal_plan"]."</td>";
						echo "<td>".$reservation["checkin_date"]."</td>";
						echo "<td>".$reservation["checkin_month"]."</td>";
						echo "<td>".$reservation["checkin_year"]."</td>";
						echo "<td></td>";
						echo "<td>".$reservation["checkout_date"]."</td>";
						echo "<td>".$reservation["checkout_month"]."</td>";
						echo "<td>".$reservation["checkout_year"]."</td>";
						$rn = $reservation["room_number"];
						echo '<td>'.'<button style="background-color: blue; font-weight: bold;" onclick="cancel(<?php echo $rn; ?>)">Cancel</button>'.'</td>';
						echo "</tr>";
					}
				?>
			</table>
		</div>
	</body>
</html>