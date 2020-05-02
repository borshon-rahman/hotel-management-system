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
	<body style="background-color: green;">		
		<center>
			<font id="msg" size="4" style="color: blue;"></font>
			<div>
				<table>
					<tr>
						<td>Room Number <input id="rn" type="text" name="rn"> &nbsp <font id="err_rn" size="4" style="color: blue;"></font>
						</td>
					</tr>
					<tr>
						<td>Room Type <select id="rtype" name="rtype"><option>Deluxe</option><option>Luxury</option><option>Guest House</option><option>Single</option></select>
						</td>
					</tr>
				</table>
				<br><br>
				<button onclick="addRoom()">Add</button>
			</div>
		</center>
	</body>
</html>