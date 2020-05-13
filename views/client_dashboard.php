<?php
	session_start();
	if(!isset($_SESSION['loggedinuser']))
	{
		header("Location:login.php");
	}
	$user = $_SESSION['loggedinuser'];
	require "../controller/user_controller.php";
	$information = user_details($user);
?>
<html>
	<title></title>
	<head>	
		<script src="scripts/client_dashboard_scripts.js"></script>
	</head>
	<body style="background-color: rgb(179, 179, 255);">
		<div style="background-color: rgb(11, 13, 71);">
		<table>
			<tr>
				<td><a href="../index.php" style="text-decoration: none;"><font size="6" style="font-family: Times New Roman; color: white;"><b>SUN</b></font><font size="6" style="font-family: Times New Roman; color: rgb(236,190,20);"><b> RISE</b></font><br>
					<font size="2" style="font-family: verdana; color: rgb(160,150,16);">YOUR DREAM HOTEL</font></a>
				</td>
				<td valign="bottom"><a href="../index.php" style="text-decoration: none;"><font style="color: rgb(236,190,20);">Home</font></a></td>
				<td></td>
				<td valign="bottom"><a href="javascript:;" onclick="room_reserve();" style="text-decoration: none;"><font style="color: rgb(236,190,20);">Reserve Room</font></a></td>
				<td></td>
				<td valign="bottom"><a href="../controller/logout.php" style="text-decoration: none;"><font style="color: rgb(236,190,20);"><b>Logout</b></font></a></td>
			</tr>
		</table>
		</div>
		<div>
			<font size="10" style="text-align: center;">Profile</font>
			<div style="background-color: rgb(236,190,20); height: 250px; text-align: center;">
				<a href="client_dashboard.php" style="text-decoration: none; color: black;"><font size="8"><?php echo $user; ?></font></a>
				<table align="center" border="4" style="width: 1400px; height: 150px; border-collapse: collapse;">
					<tr>
						<th><font size="5">First Name</font></th>
						<th></th>
						<th><font size="5">Last Name</font></th>
						<th></th>
						<th><font size="5">Gender</font></th>
						<th></th>
						<th><font size="5">Permanent Address</font></th>
						<th></th>
						<th><font size="5">Present Address</font></th>
						<th></th>
						<th><font size="5">City</font></th>
						<th></th>
						<th><font size="5">Zip Code</font></th>
						<th></th>
						<th><font size="5">Country</font></th>
						<th></th>
						<th><font size="5">Phone</font></th>
						<th></th>
						<th><font size="5">Email</font></th>
					</tr>
					<?php
						foreach($information as $info)
						{
							echo "<tr>";
							echo "<td>".$info["fname"]."</td>";
							echo "<td></td>";
							echo "<td>".$info["lname"]."</td>";
							echo "<td></td>";
							echo "<td>".$info["gender"]."</td>";
							echo "<td></td>";
							echo "<td>".$info["permanent_adrs"]."</td>";
							echo "<td></td>";
							echo "<td>".$info["present_adrs"]."</td>";
							echo "<td></td>";
							echo "<td>".$info["city"]."</td>";
							echo "<td></td>";
							echo "<td>".$info["zip_code"]."</td>";
							echo "<td></td>";
							echo "<td>".$info["country"]."</td>";
							echo "<td></td>";
							echo "<td>".$info["phone"]."</td>";
							echo "<td></td>";
							echo "<td>".$info["email"]."</td>";
							echo "</tr>";
						}
					?>
				</table><br>
				<a href="client_profile_edit.php" style="text-decoration: none; color: black; border-style: groove; border-color: blue;"><span>Edit Profile</span></a>
			</div>
		</div><br>
		<div id="content">
			
		</div>
	</body>
</html>