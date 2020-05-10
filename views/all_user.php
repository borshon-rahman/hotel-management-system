<?php
	session_start();
	if(!isset($_SESSION['loggedinuser']))
	{
		header("Location:login.php");
	}
?>

<html>
	<title></title>
	<head></head>
	<body>
		<?php
		require "../controller/user_controller.php";
		$users = users();
		?>
		<div id="msg" style="color: blue; font-size: 4;"></div>
		<div>
			<center>
				<span><font size="4" style="color: red"><b id="message"></b></font></span>
				<table>
					<tr>
						<td><b>Username </b></td>
						<td><input id="uname" type="text" name="uname"> &nbsp <font size="2" style="color: red"><b id="err_uname"></b></font></td>
					</tr>
				</table>
				<button onclick="removeUser()">Discard</button>
			</center>
		</div>
		<div style="background-color: gray;">
			<h2 style="text-align: center;">All User</h2>
			<table align="center" border="1" style="border-collapse: collapse; text-align: center;">
				<tr>
					<th>Username</th>
					<th colspan="2">Name</th>
					<th>Gender</th>
					<th colspan="2">Address</th>
					<th>City</th>
					<th>Zip Code</th>
					<th>Country</th>
					<th>Phone</th>
					<th>Email</th>
				</tr>
				<?php
					$uname = "";
					foreach ($users as $user)
					{
						echo "<tr>";
						echo "<td>".$user["user_name"]."</td>";
						echo "<td>".$user["fname"]."</td>";
						echo "<td>".$user["lname"]."</td>";
						echo "<td>".$user["gender"]."</td>";
						echo "<td>".$user["permanent_adrs"]."</td>";
						echo "<td>".$user["present_adrs"]."</td>";
						echo "<td>".$user["city"]."</td>";
						echo "<td>".$user["zip_code"]."</td>";
						echo "<td>".$user["country"]."</td>";
						echo "<td>".$user["phone"]."</td>";
						echo "<td>".$user["email"]."</td>";
						echo "</tr>";
					}
				?>
			</table>
		</div>
	</body>
</html>